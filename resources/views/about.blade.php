@extends('layouts.default')

@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6"> About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">Lorem, ipsum.</h3>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolor eum voluptatum itaque, nisi amet molestias nostrum. Itaque architecto atque voluptates assumenda dicta ipsum, dolor harum consequuntur praesentium. Animi distinctio aliquid voluptatibus tempora soluta dolores quam deleniti adipisci sed recusandae similique optio quod culpa sunt iusto, amet officia sapiente! Temporibus alias nostrum, reiciendis, sed dolorum eveniet ipsum nemo vitae, doloremque illo voluptates obcaecati corporis tenetur praesentium aliquam esse inventore modi minima labore qui quam deserunt eos. Eveniet at alias rerum voluptatibus est. Magnam voluptas praesentium adipisci accusamus sapiente fuga provident molestias nam quae. Voluptas, accusamus. Magni quis iure aliquam aperiam!   
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est dolorem nemo quis corporis, ipsam deserunt tenetur sequi impedit. Iste, accusamus perspiciatis. Laboriosam, et odio?
            </p>
            <div class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, est nihil! Aliquid magnam nihil, aperiam harum inventore corrupti officiis illo nostrum consequuntur obcaecati tempora quibusdam similique reiciendis blanditiis quis nulla iure tenetur esse? Sit quasi doloribus, voluptatem debitis eaque eius quisquam rem saepe. Aut, quidem? Possimus laudantium odit ad eius!
            </div>
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Go home</a>
            </div>
        </div>
    </section>
@endsection
