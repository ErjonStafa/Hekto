<div class="flex flex-wrap justify-center items-center">
    @foreach ($blogs as $blog)

        @foreach ($autoret as $autor)

            @if ($autor->id == $blog->autori_id)
                <div>
                    <x-blog-components.blog-card :id="$blog->id" :imgLink="$blog->img_slug" :author="$autor->username"
                        :publish_date="$blog->publish_date" :postTitle="$blog->post_title" :excerpt="$blog->excerpt" />
                </div>
            @endif

        @endforeach

    @endforeach
</div>