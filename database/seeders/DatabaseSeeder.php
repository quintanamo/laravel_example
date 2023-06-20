<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Quintin Herb',
            'email' => 'qherb@ycp.edu',
            'password' => 'Test1234!'
        ]);

        Article::create(['title' => 'My Article',
                         'author' => 'Juan Diego',
                         'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat ac felis donec et odio pellentesque diam volutpat. Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse. Nisi est sit amet facilisis magna etiam. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Feugiat scelerisque varius morbi enim nunc faucibus a. Ultricies leo integer malesuada nunc vel risus. Tincidunt ornare massa eget egestas purus viverra. Sapien et ligula ullamcorper malesuada proin libero nunc consequat.']);

        Article::create(['title' => 'Article Deux',
                         'author' => 'Joe Mama',
                         'body' => 'Nulla posuere sollicitudin aliquam ultrices. Placerat in egestas erat imperdiet sed. Vitae nunc sed velit dignissim sodales ut eu sem. Justo nec ultrices dui sapien eget mi proin. Lacus vel facilisis volutpat est velit egestas dui id ornare. Eget gravida cum sociis natoque. Placerat vestibulum lectus mauris ultrices eros in cursus. Vel pretium lectus quam id leo in. Imperdiet nulla malesuada pellentesque elit eget gravida. Erat nam at lectus urna duis convallis. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum.']);

        Article::create(['title' => 'Pure Guava',
                         'author' => 'Gene Ween',
                         'body' => 'Viverra nam libero justo laoreet sit amet cursus. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Id consectetur purus ut faucibus pulvinar. Placerat in egestas erat imperdiet sed euismod nisi porta lorem. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus.']);

        Article::create(['title' => 'My Guy',
                         'author' => 'Jose Gabriel Sanchez Lopez',
                         'body' => 'Morbi blandit cursus risus at ultrices. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. Amet volutpat consequat mauris nunc congue nisi vitae. Tortor consequat id porta nibh venenatis. Quam id leo in vitae turpis. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing. Et netus et malesuada fames ac turpis egestas integer. Sed cras ornare arcu dui vivamus arcu felis. Ipsum faucibus vitae aliquet nec ullamcorper sit. Risus at ultrices mi tempus. Velit ut tortor pretium viverra suspendisse potenti nullam ac. Aliquam id diam maecenas ultricies mi eget mauris pharetra et. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Aliquam sem et tortor consequat id porta nibh venenatis.']);

        Article::create(['title' => 'Beans:  The Magical Fruit',
                         'author' => 'Ronald S.',
                         'body' => 'Orci dapibus ultrices in iaculis nunc sed augue. Cursus vitae congue mauris rhoncus aenean vel elit. Quis commodo odio aenean sed adipiscing. Venenatis cras sed felis eget. Fermentum iaculis eu non diam phasellus vestibulum lorem sed. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing. Aliquet nibh praesent tristique magna sit. Congue quisque egestas diam in arcu cursus euismod. Sem fringilla ut morbi tincidunt augue. Ut aliquam purus sit amet luctus.']);

        Article::create(['title' => 'Spoons',
                         'author' => 'Juan Diego',
                         'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat ac felis donec et odio pellentesque diam volutpat. Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse. Nisi est sit amet facilisis magna etiam. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Feugiat scelerisque varius morbi enim nunc faucibus a. Ultricies leo integer malesuada nunc vel risus. Tincidunt ornare massa eget egestas purus viverra. Sapien et ligula ullamcorper malesuada proin libero nunc consequat.']);

        Article::create(['title' => 'Who is Joe?',
                         'author' => 'Joe Mama',
                         'body' => 'Nulla posuere sollicitudin aliquam ultrices. Placerat in egestas erat imperdiet sed. Vitae nunc sed velit dignissim sodales ut eu sem. Justo nec ultrices dui sapien eget mi proin. Lacus vel facilisis volutpat est velit egestas dui id ornare. Eget gravida cum sociis natoque. Placerat vestibulum lectus mauris ultrices eros in cursus. Vel pretium lectus quam id leo in. Imperdiet nulla malesuada pellentesque elit eget gravida. Erat nam at lectus urna duis convallis. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum.']);

        Article::create(['title' => 'Squelch the Little Weasel',
                         'author' => 'Gene Ween',
                         'body' => 'Viverra nam libero justo laoreet sit amet cursus. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Id consectetur purus ut faucibus pulvinar. Placerat in egestas erat imperdiet sed euismod nisi porta lorem. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus.']);

        Article::create(['title' => 'Programming in Python with Pythons',
                         'author' => 'Jose Gabriel Sanchez Lopez',
                         'body' => 'Morbi blandit cursus risus at ultrices. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. Amet volutpat consequat mauris nunc congue nisi vitae. Tortor consequat id porta nibh venenatis. Quam id leo in vitae turpis. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing. Et netus et malesuada fames ac turpis egestas integer. Sed cras ornare arcu dui vivamus arcu felis. Ipsum faucibus vitae aliquet nec ullamcorper sit. Risus at ultrices mi tempus. Velit ut tortor pretium viverra suspendisse potenti nullam ac. Aliquam id diam maecenas ultricies mi eget mauris pharetra et. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Aliquam sem et tortor consequat id porta nibh venenatis.']);

        Article::create(['title' => 'I hate people.',
                         'author' => 'Ronald S.',
                         'body' => 'Orci dapibus ultrices in iaculis nunc sed augue. Cursus vitae congue mauris rhoncus aenean vel elit. Quis commodo odio aenean sed adipiscing. Venenatis cras sed felis eget. Fermentum iaculis eu non diam phasellus vestibulum lorem sed. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing. Aliquet nibh praesent tristique magna sit. Congue quisque egestas diam in arcu cursus euismod. Sem fringilla ut morbi tincidunt augue. Ut aliquam purus sit amet luctus.']);
    }
}
