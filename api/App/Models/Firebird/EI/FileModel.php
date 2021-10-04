<?php 

/*ID 	INTEGER 	  	  	  	  	Yes 	  	  	  	 
	REL_ID 	INTEGER 	  	  	  	  	Yes 	  	  	  	 
	REL_TYPE 	VARCHAR(20) 	NONE 	  	  	  	Yes 	  	  	  	 
	FILE_NAME 	VARCHAR(600) 	NONE 	  	  	  	Yes 	  	  	  	 
	FILETYPE 	VARCHAR(40) 	NONE 	  	  	Yes 	  	  	  	  	 
	VISIBLE_TO_CUSTOMER 	INTEGER 	  	  	  	Yes 	  	  	  	  	 
	ATTACHMENT_KEY 	VARCHAR(32) 	NONE 	  	  	Yes 	  	  	  	  	 
	EXTERNAL 	VARCHAR(40) 	NONE 	  	  	Yes 	  	  	  	  	 
	EXTERNAL_LINK 	BLOB 	NONE 	  	  	  	  	  	  	  	 
	THUMBNAIL_LINK 	BLOB 	NONE 	  	  	  	  	  	  	  	 
	STAFFID 	INTEGER 	  	  	  	  	Yes 	  	  	  	 
	CONTACT_ID 	INTEGER 	  	  	  	Yes 	  	  	  	  	 
	TASK_COMMENT_ID 	INTEGER 	  	  	  	Yes 	  	  	  	  	 
	DATEADDED 	DATE 	  	  	  	  	Yes 	  	  	  	 
	TIMEADDED 	TIME
*/

namespace App\Models\Firebird\EI;

class FileModel extends BaseModel {

    private $id;
	private $rel_id;
	private $rel_type;
	private $file_name;
	private $filetype;
	private $visible_to_customer;
	private $attachment_key;
	private $external;
	private $external_link;
	private $thumbnail_link;
	private $staffid;
	private $contact_id;
	private $task_comment_id;
	private $dateadded;
	private $timeadded;
    
	public function __construct(){       
        //
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

	/**
	 * Get the value of rel_id
	 */ 
	public function getRel_id()
	{
		return $this->rel_id;
	}

	/**
	 * Set the value of rel_id
	 *
	 * @return  self
	 */ 
	public function setRel_id($rel_id)
	{
		$this->rel_id = $rel_id;

		return $this;
	}

	/**
	 * Get the value of rel_type
	 */ 
	public function getRel_type()
	{
		return $this->rel_type;
	}

	/**
	 * Set the value of rel_type
	 *
	 * @return  self
	 */ 
	public function setRel_type($rel_type)
	{
		$this->rel_type = $rel_type;

		return $this;
	}

	/**
	 * Get the value of file_name
	 */ 
	public function getFile_name()
	{
		return $this->file_name;
	}

	/**
	 * Set the value of file_name
	 *
	 * @return  self
	 */ 
	public function setFile_name($file_name)
	{
		$this->file_name = $file_name;

		return $this;
	}

	/**
	 * Get the value of filetype
	 */ 
	public function getFiletype()
	{
		return $this->filetype;
	}

	/**
	 * Set the value of filetype
	 *
	 * @return  self
	 */ 
	public function setFiletype($filetype)
	{
		$this->filetype = $filetype;

		return $this;
	}

	/**
	 * Get the value of visible_to_customer
	 */ 
	public function getVisible_to_customer()
	{
		return $this->visible_to_customer;
	}

	/**
	 * Set the value of visible_to_customer
	 *
	 * @return  self
	 */ 
	public function setVisible_to_customer($visible_to_customer)
	{
		$this->visible_to_customer = $visible_to_customer;

		return $this;
	}

	/**
	 * Get the value of attachment_key
	 */ 
	public function getAttachment_key()
	{
		return $this->attachment_key;
	}

	/**
	 * Set the value of attachment_key
	 *
	 * @return  self
	 */ 
	public function setAttachment_key($attachment_key)
	{
		$this->attachment_key = $attachment_key;

		return $this;
	}

	/**
	 * Get the value of external
	 */ 
	public function getExternal()
	{
		return $this->external;
	}

	/**
	 * Set the value of external
	 *
	 * @return  self
	 */ 
	public function setExternal($external)
	{
		$this->external = $external;

		return $this;
	}

	/**
	 * Get the value of external_link
	 */ 
	public function getExternal_link()
	{
		return $this->external_link;
	}

	/**
	 * Set the value of external_link
	 *
	 * @return  self
	 */ 
	public function setExternal_link($external_link)
	{
		$this->external_link = $external_link;

		return $this;
	}

	/**
	 * Get the value of thumbnail_link
	 */ 
	public function getThumbnail_link()
	{
		return $this->thumbnail_link;
	}

	/**
	 * Set the value of thumbnail_link
	 *
	 * @return  self
	 */ 
	public function setThumbnail_link($thumbnail_link)
	{
		$this->thumbnail_link = $thumbnail_link;

		return $this;
	}

	/**
	 * Get the value of staffid
	 */ 
	public function getStaffid()
	{
		return $this->staffid;
	}

	/**
	 * Set the value of staffid
	 *
	 * @return  self
	 */ 
	public function setStaffid($staffid)
	{
		$this->staffid = $staffid;

		return $this;
	}

	/**
	 * Get the value of contact_id
	 */ 
	public function getContact_id()
	{
		return $this->contact_id;
	}

	/**
	 * Set the value of contact_id
	 *
	 * @return  self
	 */ 
	public function setContact_id($contact_id)
	{
		$this->contact_id = $contact_id;

		return $this;
	}

	/**
	 * Get the value of task_comment_id
	 */ 
	public function getTask_comment_id()
	{
		return $this->task_comment_id;
	}

	/**
	 * Set the value of task_comment_id
	 *
	 * @return  self
	 */ 
	public function setTask_comment_id($task_comment_id)
	{
		$this->task_comment_id = $task_comment_id;

		return $this;
	}

	/**
	 * Get the value of dateadded
	 */ 
	public function getDateadded()
	{
		return $this->dateadded;
	}

	/**
	 * Set the value of dateadded
	 *
	 * @return  self
	 */ 
	public function setDateadded($dateadded)
	{
		$this->dateadded = $dateadded;

		return $this;
	}

	/**
	 * Get the value of timeadded
	 */ 
	public function getTimeadded()
	{
		return $this->timeadded;
	}

	/**
	 * Set the value of timeadded
	 *
	 * @return  self
	 */ 
	public function setTimeadded($timeadded)
	{
		$this->timeadded = $timeadded;

		return $this;
	}
 
}