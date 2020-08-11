<?php

class AccountTypes {
    const CLIENT = "client";
    const ADMIN = "admin";
}

class User
{
    // Properties
    private static int $userCount = 0;
    public int $id;
    public string $firstName;
    public string $middleName;
    public string $lastName;
    public string $email;
    public string $password;
    public string $fullAddress;
    public string $phone;
    public string $avatarUrl;
    public string $accountType;
    
    private string $userLinkBtnId; 
    private string $userInfoCardDivId;
    private string $title;

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
        User::$userCount += 1;
        
        $this->userLinkBtnId = "userLinkBtn".$id;
        $this->userInfoCardDivId = "userInfoCardDivId".$id;
        if ($this->middleName != "")
            $this->title = $this->firstName." ".$this->middleName[0].". ".$this->lastName;
        else
            $this->title = $this->firstName." ".$this->lastName;
    }

    public static function addUser(User $user) {

    }

    public static function removeUser(User $user) {

    }

    public function generateUserLink() {
        $onclick = "openUser('{$this->userLinkBtnId}', '{$this->userInfoCardDivId}');";

        return '<button class="tablink" onclick="'.$onclick.'" id="'.$this->userLinkBtnId.'">'.$this->title.'</button>';
    }
    
    /**
     * Create User Button and Info Card
     * @return string
     */
    public function generateUserInfoCard() {
        // Card Header
        $header = "<h3>{$this->id}. {$this->title}</h3>";
        $editBtn = "<button class='editButton' onclick='window.open(`EditUserProfile.php`, `_self`);'>Edit</button>";
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
        $password = "<div class='userInfo'>{$this->password}</div>";

        // Address
        $address = "<div class='userInfo'>Full Address: <b>{$this->fullAddress}</b></div>";

        // Phone Number
        $phone = "<div class='userInfo'>Phone: <b>{$this->phone}</b></div>";

        // Account Type
        $accountType = "<div class='userInfo'>Account Type: <b>{$this->accountType}</b></div>";

        // Main Card (Main Container)
        return "<div class='userInfoCard' id='{$this->userInfoCardDivId}'>
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