<?php
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;

  class TemplateController extends Controller{

    public function test(){

      return view('templates.test', [
        'links' => [
      		[
      			'text' => 'text1',
      			'href' => 'href1',
      		],
      		[
      			'text' => 'text2',
      			'href' => 'href2',
      		],
      		[
      			'text' => 'text3',
      			'href' => 'href3',
      		],
      	],

        'employees' => [
      		[
      			'name' => 'user1',
      			'surname' => 'surname1',
      			'salary' => 1000,
      		],
      		[
      			'name' => 'user2',
      			'surname' => 'surname2',
      			'salary' => 2000,
      		],
      		[
      			'name' => 'user3',
      			'surname' => 'surname3',
      			'salary' => 3000,
      		],
      		[
      			'name' => 'user4',
      			'surname' => 'surname4',
      			'salary' => 4000,
      		],
      		[
      			'name' => 'user5',
      			'surname' => 'surname5',
      			'salary' => 5000,
      		]
      	],

        'users' => [
      		[
      			'name' => 'user1',
      			'surname' => 'surname1',
      			'banned' => true,
      		],
      		[
      			'name' => 'user2',
      			'surname' => 'surname2',
      			'banned' => false,
      		],
      		[
      			'name' => 'user3',
      			'surname' => 'surname3',
      			'banned' => true,
      		],
      		[
      			'name' => 'user4',
      			'surname' => 'surname4',
      			'banned' => false,
      		],
      		[
      			'name' => 'user5',
      			'surname' => 'surname5',
      			'banned' => false,
      		]
      	],

        'strings' => [
          'one', 'two', 'three', 'four', 'five', 'sex', 'seven'
        ],

        'month'          => date('F', mktime(0,0,0, 6,0)),
        'firstDay'       => 1,
        'dayNow'         => date('j'),
        'lastDayInMonth' => date('j', mktime(0,0,0, 6, 0)),




      ]);
    }
  }
