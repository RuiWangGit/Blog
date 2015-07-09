<?php

/**
 * This is the model class for table "{{Comments}}".
 *
 * The followings are the available columns in table '{{Comments}}':
 * @property integer $id
 * @property string $content
 * @property integer $status
 * @property integer $author
 * @property string $email
 * @property string $url
 * @property integer $post_id
 * @property string $created_at
 * @property string $updated_at
 */
class Comments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{comments}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status,  post_id', 'numerical', 'integerOnly'=>true),
			array('email, author', 'length', 'max'=>255),
			array('content, url, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, content, status, author, email, url, post_id, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'post'=>array(self::BELONGS_TO, 'Posts', 'post_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'content' => 'Content',
			'status' => 'Status',
			'author' => 'Author',
			'email' => 'Email',
			'url' => 'Url',
			'post_id' => 'Post_id',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('content',$this->content,true);

		$criteria->compare('status',$this->status);

		$criteria->compare('author',$this->author);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('url',$this->url,true);

		$criteria->compare('post_id',$this->post_id);

		$criteria->compare('created_at',$this->created_at,true);

		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider('Comments', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Comments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}



	public function beforeSave() {
	    if ($this->isNewRecord)
	        $this->created_at = new CDbExpression('NOW()');
	    else
	        $this->updated_at = new CDbExpression('NOW()');
	 
	    return parent::beforeSave();
}



}