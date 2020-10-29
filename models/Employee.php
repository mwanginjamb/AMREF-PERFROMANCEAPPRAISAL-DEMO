<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "employee".
 *
 * @property string $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $email
 * @property string $cell
 * @property string|null $employee_no
 * @property int|null $departmentid
 * @property string|null $nhif
 * @property string|null $nssf
 * @property string|null $passportno
 * @property string|null $krapin
 * @property int|null $userid
 * @property int|null $updated_by
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Department $department
 * @property User $user
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'firstname', 'middlename', 'lastname', 'email', 'cell'], 'required'],
            [['departmentid', 'userid', 'updated_by', 'created_by', 'created_at', 'updated_at'], 'integer'],
            [['id', 'firstname', 'middlename', 'lastname', 'email', 'cell', 'employee_no', 'nhif', 'nssf', 'passportno', 'krapin'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['departmentid'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['departmentid' => 'id']],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'cell' => 'Cell',
            'employee_no' => 'Employee No',
            'departmentid' => 'Departmentid',
            'nhif' => 'Nhif',
            'nssf' => 'Nssf',
            'passportno' => 'Passportno',
            'krapin' => 'Krapin',
            'userid' => 'Userid',
            'updated_by' => 'Updated By',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\DepartmentQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'departmentid']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userid']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\EmployeeQuery(get_called_class());
    }
}
