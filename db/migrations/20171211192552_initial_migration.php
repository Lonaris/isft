<?php

use Phinx\Migration\AbstractMigration;

class InitialMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
	$users = $this->table('users');
	$posts = $this->table('posts');
	$contests = $this->table('contests');

	$users
		->addColumn('username', 'string', ['limit' => 20])
		->addColumn('password', 'string', ['limit' => 40])
		->addColumn('password_salt', 'string', ['limit' => 40])
		->addColumn('email', 'string', ['limit' => 100])
		->addColumn('first_name', 'string' , ['limit' => 30])
		->addColumn('last_name', 'string', ['limit' => 30])
		->create();
	
	$posts
		->addColumn('title', 'string', ['limit' => 40])
		->addColumn('content', 'text')
		->addColumn('thumbnail', 'string', ['limit' => 40])
		->addColumn('author', 'integer')
		->addColumn('created', 'datetime')
		->addColumn('updated', 'datetime', ['null' => true])
		->addForeignKey('author', 'users', 'user_id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
		->create();
	
	$contests
		->addColumn('carrera', 'string', ['limit' => 30])
		->addColumn('fecha', 'date')
		->addColumn('ganador', 'string', ['limit' => 40])
		->create();

    }
}
