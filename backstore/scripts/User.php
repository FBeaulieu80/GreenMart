<?php

class AccountTypes {
    const CLIENT = "client";
    const ADMIN = "admin";
}

class User
{
    // Properties
    private static SimpleXMLElement $userFile;
    private static int $userCount = 0;
    private string $id;
    private string $firstName;
    private string $middleName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $fullAddress;
    private string $phone;
    private string $avatarUrl;
    private string $accountType;
    
    private string $userLinkBtnId; 
    private string $userInfoCardDivId;
    private string $title;

    /* GETTERS */
    /**
     * @return int
     */
    public static function getUserCount(): int
    {
        return self::$userCount;
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
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * Get array of Users from the XML file.
     * @return SimpleXMLElement
     */
    public static function getUsers() {
        return self::$userFile->children();
    }

    /**
     * @param string $id
     * @return false|User
     */
    public static function getUserById(string $id) {
        $users = User::$userFile->xpath("//user['{$id}']");
        if (count($users) >= 1) {
            return self::fromSimpleXMLElement($users[0]);
        }
        else {
            return false;
        }
    }
    /* END OF GETTERS */



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
     * @param string $avatarUrl
     * @param string $accountType
     */
    public function __construct( string $id, string $firstName, string $middleName, string $lastName, string $email, string $password, string $fullAddress, string $phone, string $avatarUrl, string $accountType=AccountTypes::CLIENT) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->fullAddress = $fullAddress;
        $this->phone = $phone;
        $this->avatarUrl = $avatarUrl;
        $this->accountType = $accountType;

        $this->userLinkBtnId = "userLinkBtn".$id;
        $this->userInfoCardDivId = "userInfoCardDivId".$id;
        if ($this->middleName != "")
            $this->title = $this->firstName." ".$this->middleName[0].". ".$this->lastName;
        else
            $this->title = $this->firstName." ".$this->lastName;
    }

    /**
     * Create User Object From SimpleXMLElement.
     * @param SimpleXMLElement $user
     * @return User
     */
    public static function fromSimpleXMLElement(SimpleXMLElement $user) : User {
        return new User(
            $user["id"],
            $user->firstName,
            $user->middleName,
            $user->lastName,
            $user->email,
            $user->password,
            $user->fullAddress,
            $user->phone,
            $user->avatarUrl,
            $user->accountType
        );
    }

    /**
     * Initialize userFile and userCount by reading 'users.xml' database.
     */
    public static function init() {
        self::$userFile = simplexml_load_file("../files/users.xml") or die("Could not read file...");
        self::$userFile["count"] = self::$userFile->children()->count();
        self::$userCount = intval(self::$userFile["count"]);
        self::saveUsers();
    }

    /**
     * Save users.xml file.
     */
    private static function saveUsers() {
        self::$userFile->asXML("../files/users.xml");
    }

    /* ADD | SAVE | DELETE */
    /**
     * Add User to XML file database.
     */
    public function addUser() {
        self::$userCount += 1;
        self::$userFile["count"] = self::$userCount;
        $new = self::$userFile->addChild("user");
        $new->addAttribute("id", $this->id );
        $new->addChild("firstName", $this->firstName );
        $new->addChild("middleName", $this->middleName );
        $new->addChild("lastName", $this->lastName );
        $new->addChild("email", $this->email );
        $new->addChild("password", $this->password );
        $new->addChild("fullAddress", $this->fullAddress );
        $new->addChild("phone", $this->phone );
        $new->addChild("avatarUrl", $this->avatarUrl );
        $new->addChild("accountType", $this->accountType );
        // echo "new: "; print_r($new); echo "<br/>"; // TODO REMOVE
        //self::$userFile->asXML("../files/users.xml");
        self::saveUsers();
    }

    /**
     * Remove this user from the XML file database.
     */
    public function deleteUser() {
        // find users with current Id.
        $users = self::$userFile->xpath("//user[@id='{$this->id}']");
        foreach ($users as $user) {
            $dom = dom_import_simplexml($user);
            $dom->parentNode->removeChild($dom);
        }
        self::saveUsers();
    }

    public function saveUser() {
        // find users with current Id.
        $users = self::$userFile->xpath("//user[@id='{$this->id}']");
        foreach ($users as $user) {
            $dom = dom_import_simplexml($user);
            $dom->parentNode->removeChild($dom);
        }
        $this->addUser();
        self::saveUsers();

        /*foreach (self::$userFile->user as $user) {
            if ($user["id"] == $id) {


                self::$userCount -= 1;
                self::$userFile["count"] = self::$userCount;
                self::saveUsers();
                return;
            }
        }*/
    }
    /* END OF ADD | SAVE | DELETE */

    /* HTML GENERATOR FUNCTIONS */
    /**
     * Create User List Button
     * @param bool $isActive
     * @return string
     */
    public function generateUserLink(bool $isActive=false) {
        $onclick = "openUser(\"{$this->userLinkBtnId}\", \"{$this->userInfoCardDivId}\");";
        $class = $isActive ? "tablink active" : "tablink";
        return "<button class='{$class}' onclick='{$onclick}' id='{$this->userLinkBtnId}'>{$this->title}</button>";
    }

    /**
     * Create User Info Card
     * @param bool $isActive
     * @return string
     */
    public function generateUserInfoCard(bool $isActive=false) {
        $class = $isActive ? "userInfoCard active" : "userInfoCard";
        // Card Header
        $header = "<h3>{$this->id}. {$this->title}</h3>";
        $editBtn = "<form method='post' action='EditUserProfile.php'>
                        <input type='submit' value='EDIT PROFILE' name='editBtn' class='editButton'>
                        <input type='hidden' name='userId' value='{$this->id}'>
                    </form>";
        $headerDiv = "<div class='userInfoHeader'>
                          {$header}
                          {$editBtn}
                      </div>";

        // Avatar
        $avatar = "<img class='userInfoAvatar' src='{$this->avatarUrl}' alt='Avatar' onerror='this.src = `../../images/users/avatar.svg`;'>";

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
        return "<div class='{$class}' id='{$this->userInfoCardDivId}'>
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
                </div>";
    }

    /* END OF HTML GENERATOR FUNCTIONS */

}