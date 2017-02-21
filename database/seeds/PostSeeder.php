<?php

use Illuminate\Database\Seeder;
use \App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('posts')->delete();

    	$body = "Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.

				Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.

				What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.

				A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.

				For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.";

        
            Post::create([
                'title' => 'Man must explore, and this is exploration at its greatest',
                'subtitle' => 'Problems look mighty small from 150 miles up',
                'body' => $body,
                'author' => ' Ambrose'
            ]);

            //Removed a nullable field.
            //it works Yay!

            Post::create([
                'title' => 'I believe every human has a finite number of heartbeats.',
                'body' => $body,
                'author' => ' Ruth'
            ]);
    }
}
