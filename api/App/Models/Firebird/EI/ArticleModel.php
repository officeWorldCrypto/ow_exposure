<?php

/* TBLKNOLEDGEBASE */
/*
    ARTICLEID      INTEGER NOT NULL,
    ARTICLEGROUP   INTEGER NOT NULL,
    SUBJECT        VARCHAR(512),
    DESCRIPTION    BLOB SUB_TYPE 1 SEGMENT SIZE 80,
    SLUG           VARCHAR(512),
    "ACTIVE"       VARCHAR(1) NOT NULL,
    DATECREATED    DATE NOT NULL,
    HOURCREATED    TIME NOT NULL,
    ARTICLE_ORDER  INTEGER DEFAULT '0',
    STAFF_ARTICLE  INTEGER DEFAULT '0'
  */
namespace App\Models\Firebird\EI;

final class ArticleModel {
    /*
    * @var integer
    */
    private $articleid;
    private $articlegroup;
    private $subject;
    private $description;
    private $slug;
    private $active;
    private $datecreated;
    private $hourcreated;  
    private $article_order;
    private $staff_article;
   

    /**
     * Get /*
     *
     * @return  integer
     */ 
    public function getArticleid()
    {
        return $this->articleid;
    }

    /**
     * Set /*
     *
     * @param  integer  $articleid  /*
     *
     * @return  self
     */ 
    public function setArticleid($articleid)
    {
        $this->articleid = $articleid;

        return $this;
    }

    /**
     * Get the value of subject
     */ 
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the value of subject
     *
     * @return  self
     */ 
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of slug
     */ 
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @return  self
     */ 
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of active
     */ 
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @return  self
     */ 
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of datecreated
     */ 
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set the value of datecreated
     *
     * @return  self
     */ 
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    /**
     * Get the value of hourcreated
     */ 
    public function getHourcreated()
    {
        return $this->hourcreated;
    }

    /**
     * Set the value of hourcreated
     *
     * @return  self
     */ 
    public function setHourcreated($hourcreated)
    {
        $this->hourcreated = $hourcreated;

        return $this;
    }

    /**
     * Get the value of article_order
     */ 
    public function getArticle_order()
    {
        return $this->article_order;
    }

    /**
     * Set the value of article_order
     *
     * @return  self
     */ 
    public function setArticle_order($article_order)
    {
        $this->article_order = $article_order;

        return $this;
    }

    /**
     * Get the value of staff_article
     */ 
    public function getStaff_article()
    {
        return $this->staff_article;
    }

    /**
     * Set the value of staff_article
     *
     * @return  self
     */ 
    public function setStaff_article($staff_article)
    {
        $this->staff_article = $staff_article;

        return $this;
    }

    /**
     * Get the value of articlegroup
     */ 
    public function getArticlegroup()
    {
        return $this->articlegroup;
    }

    /**
     * Set the value of articlegroup
     *
     * @return  self
     */ 
    public function setArticlegroup($articlegroup)
    {
        $this->articlegroup = $articlegroup;

        return $this;
    }
}  