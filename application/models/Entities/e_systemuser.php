<?php
namespace models\Entities;
 
/**
 * Encryption key adapted from @Joseph Wynn algorithm
 * @Entity
 * @Table(name="users")
 * @author John O. Adams 
 */

class E_SystemUser
{
	/**
     * Encryption key used as for password hashing
     * @static
     */
    private static $encryption_key = '5p(TWrzR}KN|3nGV+6D#8Evkdx:]K"]azW*!A7:P5<84;{6kB)c6>D{="]RP/CC';
	
	/**
	 * @Id
	 * @Column(name="usersID", type="integer", length=20, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $id;
	 
	/**
	 * @Column(name="userName",type="string", length=32, unique=true, nullable=false)
	 */
	private $username;
	 
	/**
	 * @Column(name="userPassword",type="string", length=255, nullable=false)
	 */
	private $password;
	
	/**
	 * @Column(name="userRights",type="integer", length=1, nullable=false)
	 */
	private $userRights;
	/**
	 * @Column(name="company_id",type="integer", length=11, nullable=true)
	 */
	private $company_id;
	
	/**
	 * @Column(name="is_active",type="integer", length=11, nullable=true)
	 */
	private $is_active;
	/**
	 * @Column(name="activationcode",type="string", length=250, nullable=true)
	 */
	private $activationcode;
	
	public function getactivationcode() { return $this->activationcode; }
    public function setactivationcode($activationcode) { $this->activationcode = $activationcode; }
	
	public function getis_active() { return $this->is_active; }
    public function setis_active($is_active) { $this->is_active = $is_active; }
	
	public function getcompany_id() { return $this->company_id; }
    public function setcompany_id($company_id) { $this->company_id = $company_id; }
	 
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function setUsername($username) { $this->username = $username; }
    public function getUsername() { return $this->username; }
	
    public function setPassword($password) {
    	$encrypted_password = self::encryptPassword($password);

		$this->password = $encrypted_password;
    	 }
	
	/**
	 * Encrypt a Password
	 *
	 * @static
	 * @access	public
	 * @param	string	$password
	 * @return	void
	 */
	public static function encryptPassword($password)
	{
		return sha1($password . self::$encryption_key);
	}
	
    public function getPassword() {  return $this->password; }
    
	
	public function getUserRights() { return $this->userRights; }
    public function setUserRights($level) { $this->userRights = $level; }
	

}
