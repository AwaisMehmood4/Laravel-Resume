<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
        <div class="mt-5">
            <div class="text-center">
                <img src="{{ asset('images/pic1.jpg' )}}" alt="" class="img-thumbnail" width="250px" height="150px">
            </div>
            <div class="mt-5 text-white mx=5 text-justify">
                <h1 class="fw-bold st-font">Hello,</h1>
                <div class="px-4" style="line-height: 2rem">
                    <p style="text-indent: 100px">
                    I am <b class="text-warning">Roman Reigns</b> 
                    having 5 years of full-stack web development 
                    experience for global business, I offer the 
                    techinal expertise you are seeking for your web developer position.
                    </p>
                    <p>
                        Since earning my bacheloer's degree in Computer Science
                        from XYZ university. I have served <b class="text-warning">
                            OneByte</b>, one of the biggest premier digital marketing and 
                            web development firm. In the position, I have led web development projects 
                            for clients in diverse industries including technology, manufacturing, pharmaceutical, 
                            hospitality, retail and financial servics.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Numquam at non odio amet maiores sapiente tempore magni 
                         aspernatur possimus quae, libero itaque dicta odit fuga 
                         labore nesciunt dolores quidem in. Provident quam excepturi
                          dolorum molestias blanditiis velit repellendus id,
                         eligendi dolores doloribus nisi ipsam unde deserunt quaerat animi in? Sit.
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('contact') }}" class="btn
                btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{ route('contact') }}" class="btn
                btn-outline-info">Contact</a>
            </div>
        </div>
    </x-slot>
</x-layout>