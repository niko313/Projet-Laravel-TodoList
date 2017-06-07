<?php
class TasksTableSeeder extends Seeder {
    public function run() {
        DB::table('tasks')->insert(
            array(
                array(
                    'tasks' => 'Taches1',
                    'commentaires' => 'commentaires1',

                ),

                array(
                    'tasks' => 'Taches2',
                    'commentaires' => 'commentaires2',

                ),
                array(
                    'tasks' => 'Taches3',
                    'commentaires' => 'commentaires3',

                ),
                array(
                    'tasks' => 'Taches4',
                    'commentaires' => 'commentaires4',

                ),
                array(
                    'tasks' => 'Taches5',
                    'commentaires' => 'commentaires5',

                ),
            )
        );
    }
}
 ?>
