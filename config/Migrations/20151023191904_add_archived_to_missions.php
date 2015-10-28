<?php
use Migrations\AbstractMigration;

class AddArchivedToMissions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('missions');
        $table->addColumn('archived', 'boolean', [
            'default' => false,
            'null' => false,
        ]);
        $table->update();
    }
}
