@extends('template.app')

@section('content')

    <style>
        .hover-effect:hover {
            transform: scale(1.015);
        }

        .hover-effect {
            transition: 0.3s; 
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>

    <div class="site-blocks-cover overlay"
        style="background: rgb(92,135,165);
        background: linear-gradient(90deg, rgba(92,135,165,1) 0%, rgba(92,153,196,1) 60%, rgba(0,148,255,1) 100%);"
        data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    
                    <h1>Title Divisi</h1>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section" style="padding-bottom: 0; ">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading m-3 w-border col-md-10 mx-auto">
                    <h2 class="mb-5 align-self-center">VISI</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                        literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                        of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                        book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
                        Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                        their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" style="padding-bottom: 0">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading m-3 w-border col-md-10 mx-auto">
                    <h2 class="mb-5 align-self-center">MISI</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                        literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                        of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                        book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
                        Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                        their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" style="padding-bottom: 0">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading m-3 w-border col-md-10 mx-auto">
                    <h2 class="mb-5 align-self-center">Program Kerja</h2>   
                    <div class="d-flex align-items-center rounded p-3 mb-4 hover-effect">
                        <div class="pr-3">&#129066;</div>
                        <div>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"
                        </div>
                    </div>

                    <div class="d-flex align-items-center rounded p-3 mb-4 hover-effect">
                        <div class="pr-3">&#129066;</div>
                        <div>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"
                        </div>
                    </div>

                    <div class="d-flex align-items-center rounded p-3 mb-4 hover-effect">
                        <div class="pr-3">&#129066;</div>
                        <div>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
