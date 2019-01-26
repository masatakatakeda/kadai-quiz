<?php

use Illuminate\Database\Seeder;

class NotebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1レコード
        $notebook = new \App\Notebook([
           'display_number' => '1',
           'title' => '地方公務員法の目的',
           'quiz' =>'1 地方公務員法の目的は、条文に明記されていない
                     2 地方自治の本旨とは、団体自治と住民自治のことである
                     3 地方公務員法の目的は2条に記載されている',
           'correct_number' => '2',
           'content' => '地方公務員法の目的は、地方自治の本旨の実現に役立つこと。そのために、
                            1  人事機関と人事行政の根本基準を確立して、
                            2  自治行政の民主的・能率的運営と
                            3  特定地方独立行政法人の事務事業の確実な実施を保障する'
        ]);
          $notebook->save();
        
        //2レコード
        $notebook = new \App\Notebook([
            'display_number' => '2',
            'title' => '地方公務員法の効力',
            'quiz' =>'1 地公法2条は、「後法優先の原則」を定めている
                      2 地方公務員の定義は、2条と3条と同じ内容である
                      3 地方公務員法以外に地方公務員について記述した法律はない',
            'correct_number' => '1',
            'content' => '1 後法優先の原則の原則とは、異なる法令間でどちらが優先するかを決定する際の基本原則のこと
                          2 地方公務員の定義として、2条に「地方公共団体のすべての公務員」とある'
         ]);
          $notebook->save();
    }
}
