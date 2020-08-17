<?php

class AccountTypes
{
    const CLIENT = "client";
    const ADMIN = "admin";
}

class User
{
    // Properties
    private static string $databaseUrl;
    private static DOMDocument $userFile;
    private static DOMElement $users;
    private static int $userCount = 0;
    private string $id;
    private string $firstName;
    private string $middleName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $fullAddress;
    private string $phone;
    private string $avatarFile;
    private string $accountType;

    private string $userLinkBtnId;
    private string $userInfoCardDivId;
    private string $title;

    /* GETTERS */

    /**
     * User constructor.
     * @param string $id
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param string $fullAddress
     * @param string $phone
     * @param string $avatarFile
     * @param string $accountType
     */
    public function __construct(string $id, string $firstName, string $middleName, string $lastName, string $email, string $password, string $fullAddress, string $phone, string $avatarFile, string $accountType = AccountTypes::CLIENT)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->fullAddress = $fullAddress;
        $this->phone = $phone;
        $this->avatarFile = $avatarFile;
        $this->accountType = $accountType;

        $this->userLinkBtnId = "userLinkBtn" . $id;
        $this->userInfoCardDivId = "userInfoCardDivId" . $id;
        if ($this->middleName != "")
            $this->title = $this->firstName . " " . $this->middleName[0] . ". " . $this->lastName;
        else
            $this->title = $this->firstName . " " . $this->lastName;
    }

    /**
     * @return int
     */
    public static function getUserCount(): int
    {
        return self::$userCount;
    }

    /**
     * Get array of Users from the XML file.
     * @return DOMNodeList|null
     */
    public static function getUsers()
    {
        return self::$users->childNodes;
    }

    /**
     * @param string $id
     * @return false|User
     */
    /*public static function getUserById(string $id)
    {
        $users = User::$userFile->xpath("//user['{$id}']");
        if (count($users) >= 1) {
            return self::fromDOMElement($users[0]);
        } else {
            return false;
        }
    }*/

    /**
     * Create User Object From SimpleXMLElement.
     * @param DOMElement $user
     * @return User
     */
    public static function fromDOMElement(DOMElement $user): User
    {
        return new User(
            $user->getAttribute("id"),
            $user->getAttribute("firstName"),
            $user->getAttribute("middleName"),
            $user->getAttribute("lastName"),
            $user->getAttribute("email"),
            $user->getAttribute("password"),
            $user->getAttribute("fullAddress"),
            $user->getAttribute("phone"),
            $user->getAttribute("avatarFile"),
            $user->getAttribute("accountType")
        );
    }

    /**
     * Initialize userFile and userCount by reading 'users.xml' database.
     */
    public static function init()
    {
        self::$databaseUrl = $_SERVER['DOCUMENT_ROOT']."files/users.xml";
        self::$userFile = new DOMDocument();
        self::$userFile->formatOutput = true;
        self::$userFile->preserveWhiteSpace = false;
        self::$userFile->load(self::$databaseUrl) or die("Could not read file...");
        if (self::$userFile->hasChildNodes()) {
            self::$users = self::$userFile->childNodes[0];
            self::$users->setAttribute("count", self::$users->childNodes->count());
            self::$userCount = self::$users->childNodes->count();
        } else {
            self::$users = self::$userFile->createElement("users");
            self::$users->setAttribute("count", "0");
            self::$userFile->appendChild(self::$users);
        }

        self::saveUsers();
    }

    /**
     * Save users.xml file.
     */
    private static function saveUsers()
    {
        if (!isset(self::$databaseUrl))
            throw new RuntimeException("Call to User::init() function is required prior to calling User::saveUsers().");

        $sorted = iterator_to_array(self::$users->childNodes);
        usort($sorted, function (DOMElement $u1, DOMElement $u2) {
            return intval($u1->getAttribute("id")) - intval($u2->getAttribute("id"));
        });
        /*foreach ($sorted as $node) {
            $users->item(0)->parentNode->appendChild($node);
        }*/
        self::$userFile->save(self::$databaseUrl);
        self::$userFile->load(self::$databaseUrl) or die("Could not read file...");
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /* END OF GETTERS */

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getFullAddress(): string
    {
        return $this->fullAddress;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getAvatarFile(): string
    {
        return $this->avatarFile;
    }

    /* ADD | SAVE | DELETE */

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * Remove this user from the XML file database.
     */
    public function deleteUser()
    {
        $users = new DOMXPath(self::$userFile);
        foreach ($users->query("//user[@id='{$this->id}']") as $user) {
            $dom = dom_import_simplexml($user);
            $dom->parentNode->removeChild($dom);
        }
        self::saveUsers();
    }

    public function saveUser()
    {
        foreach (self::$userFile->childNodes as $root) {
            foreach ($root->childNodes as $oldUser) {
                if ($oldUser->getAttribute("id") == $this->id) {
                    $root->replaceChild($this->asXML(), $oldUser);
                    self::saveUsers();
                }
            }
        }
    }

    /**
     * Return this User object as a DOMElement object. (Convert OBJ to XML)
     * @return DOMElement
     */
    private function asXML() : DOMElement{
        $new = self::$userFile->createElement("user");
        $new->setAttribute("id", $this->id);
        $new->setAttribute("firstName", $this->firstName);
        $new->setAttribute("middleName", $this->middleName);
        $new->setAttribute("lastName", $this->lastName);
        $new->setAttribute("email", $this->email);
        $new->setAttribute("password", $this->password);
        $new->setAttribute("fullAddress", $this->fullAddress);
        $new->setAttribute("phone", $this->phone);
        $new->setAttribute("avatarFile", $this->avatarFile);
        $new->setAttribute("accountType", $this->accountType);
        return $new;
    }

    /**
     * Add User to XML file database.
     */
    public function addUser()
    {
        self::$userCount += 1;
        self::$users->setAttribute("count", self::$userCount);
        foreach (self::$userFile->childNodes as $root) {
            $root->appendChild($this->asXML());
        }
        self::saveUsers();
    }
    /* END OF ADD | SAVE | DELETE */

    /* HTML GENERATOR FUNCTIONS */

    /**
     * Create User List Button
     * @param bool $isActive
     * @return string
     */
    public function generateUserLink(bool $isActive = false)
    {
        $class = $isActive ? "tablink active" : "tablink";
        return "<button class='{$class}' 
                        onclick='openUser(\"{$this->userLinkBtnId}\", \"{$this->userInfoCardDivId}\");' 
                        id='{$this->userLinkBtnId}'>{$this->title}</button>";
    }

    /**
     * Create User Info Card
     * @param bool $isActive
     * @return string
     */
    public function generateUserInfoCard(bool $isActive = false)
    {
        $class = $isActive ? "userInfoCard active" : "userInfoCard";
        // Card Header
        $header = "<h3>{$this->id}. {$this->title}</h3>";
        $editBtn = "<form method='post' action='EditUserProfile.php'>
                        <span class='editProfileBtn' >
                            <input type='image' alt='EDIT' src='../../images/editProfileBtn.svg' name='editBtn2'>
                        </span>
                        <input type='submit' value='EDIT PROFILE' name='editBtn1' class='editButton'>                                
                        <input type='hidden' name='userId' value='{$this->id}'>
                    </form>";
        $headerDiv = "<div class='userInfoHeader'>
                          {$header}
                          {$editBtn}
                      </div>";

        // Avatar
        $avatar = "<img class='userInfoAvatar' src='{$this->avatarFile}' alt='Avatar' onerror='this.src = `../../images/users/avatar.svg`;'>";

        // First Name
        $firstName = "<div class='userInfo'>First Name: <b>{$this->firstName}</b></div>";

        // Middle Name
        $middleName = "<div class='userInfo'>Middle Name: <b>{$this->middleName}</b></div>";

        // Last Name
        $lastName = "<div class='userInfo'>Last Name: <b>{$this->lastName}</b></div>";

        // Email
        $email = "<div class='userInfo'>email: <b>{$this->email}</b></div>";

        // Password
        $starred = str_repeat("*", strlen($this->password));
        $password = "<div class='userInfo'>Password: {$starred}</div>";

        // Address
        $address = "<div class='userInfo'>Full Address: <b>{$this->fullAddress}</b></div>";

        // Phone Number
        $phone = "<div class='userInfo'>Phone: <b>{$this->phone}</b></div>";

        // Account Type
        $accountType = "<div class='userInfo'>Account Type: <b>{$this->accountType}</b></div>";

        // Main Card (Main Container)
        return <<<DIV
            <div class='{$class}' id='{$this->userInfoCardDivId}'>
                {$headerDiv}
                {$avatar}
                {$firstName}
                {$middleName}
                {$lastName}
                {$email}
                {$password}
                {$address}
                {$phone}
                {$accountType}
            </div>
            DIV;
    }

    /* END OF HTML GENERATOR FUNCTIONS */

}

