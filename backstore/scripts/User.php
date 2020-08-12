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
    private int $id;
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

    /**
     * @return int
     */
    public static function getUserCount(): int
    {
        return self::$userCount;
    }

    /**
     * @param int $userCount
     */
    public static function setUserCount(int $userCount): void
    {
        self::$userCount = $userCount;
    }

    /**
     * @return int
     */
    public function getId(): int
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
     * User constructor.
     * @param int $id
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
    public function __construct( int $id, string $firstName, string $middleName, string $lastName, string $email, string $password, string $fullAddress, string $phone, string $avatarUrl, string $accountType=AccountTypes::CLIENT) {
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

    public static function init() {
        self::$userFile = simplexml_load_file("../files/users.xml") or die("Could not read file...");
        self::$userCount = intval(self::$userFile->UserCount);
    }

    /**
     * @param SimpleXMLElement $doc
     * @return void
     */
    public function addUser() {
        //echo $_SERVER["DOCUMENT_ROOT"];
        self::$userCount += 1;
        self::$userFile->UserCount = self::$userCount;
        $new = self::$userFile->addChild("user");
        
        $new->addChild("id", $this->id );
        $new->addChild("firstName", $this->firstName );
        $new->addChild("middleName", $this->middleName );
        $new->addChild("lastName", $this->lastName );
        $new->addChild("email", $this->email );
        $new->addChild("password", $this->password );
        $new->addChild("fullAddress", $this->fullAddress );
        $new->addChild("phoneNumber", $this->phone );
        $new->addChild("avatarUrl", $this->avatarUrl );
        $new->addChild("accountType", $this->accountType );
        // echo "new: "; print_r($new); echo "<br/>"; // TODO REMOVE
        self::$userFile->asXML("../files/users.xml");
    }

    public static function removeUser(User $user) {

    }

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
        $editBtn = "<form method='post' action='EditUserProfile.php'><input type='submit' value='EDIT PROFILE' name='editBtn' class='editButton'></form>";
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
}