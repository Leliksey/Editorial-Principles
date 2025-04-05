<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build/assets/app-vXaJq8TV.css') }}">
    <title>Главная</title>
</head>
<body>
    @include('components.header')
    
    <section class="main" style="background-image: url('{{ asset('images/bg_main.png') }}')">
        <div class="container">
            @include('components.breadcrumbs')
            <div class="main__content">
                <h1>Editorial Principles</h1>
                <div class="main__desc-wrapper">
                    <div class="main__desc">
                        <p>Editorial principles underpin our platform, providing consistent, accurate, and trustworthy information. From research and Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas repellat recusandae animi dolore impedit earum laborum. Est, modi. Vitae, dolor nemo. Facilis adipisci ex distinctio necessitatibus magnam animi esse at.</p>
                        <button type="button" class="btn_more">
                            Show more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="whyImportant">
        <div class="container">
            <div class="whyImportant__content">
                <div class="whyImportant__starter" style="background-image: url('{{ asset('images/bg_starter_desk.png') }}')">
                    <h2>Editorial Principles</h2>
                    <picture>
                        <source srcset="{{ asset('images/starter2.png') }}" media="(min-width: 1280px)">
                        <img src="{{ asset('images/starter.png') }}" alt="editorial principles">
                    </picture>
                </div>
                <div class="whyImportant__text simpleText">
                    <h2 class="whyImportant__title">Why Editorial Principles Are Important?</h2>
                    <p class="whyImportant__desc">Editorial principles ensure our writing's consistency, clarity, honesty, and integrity. Consistency lets readers know what to expect from our platform. From writing tone to analysis depth, we aim for excellence throughout all material. Clarity is also crucial—explaining material clearly, minimizing uncertainty, and making our evaluations accessible to large audiences. We build trust with our readers on honesty. Our readers may trust our material since we fact-check and validate every claim. Our method also emphasizes ethics. We follow copyright, anti-plagiarism, and legal norms in an industry frequently viewed with mistrust. These principles make our helpful information trustworthy and reliable.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="simpleText">
        <div class="container">
            <div class="simpleText__content">
                <h2>Where Our Editorial Guidelines Come From</h2>
                <p>Established standards and best practices have been carefully combined to create our editing guidelines to assure the greatest content quality. We base these standards on our Privacy Policy, Terms of Use, and Rating standards. We preserve reader privacy by following the Privacy Policy while handling user data and interactions. Our Terms of Use emphasize openness and responsibility in our user interaction. Finally, the Rating Guidelines guide our casino and service reviews, offering a disciplined and objective approach. Our editorial staff applies these principles to every piece of material. We uphold these standards to demonstrate our dedication to quality, honesty, and user pleasure.</p>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <div class="team__content simpleText">
                <img class="team__img" src="{{ asset('images/team_img.png') }}" alt="Editorial Team Behind These Guidelines">
                <div class="team__text">
                    <h2 class="team__title">Editorial Team Behind These Guidelines</h2>
                    <p>We prioritize quality and accuracy because of our editorial team. Our staff of professional researchers and specialists is knowledgeable and skilled. Each member is well-versed in gaming and online casinos. Our insights are factual and informed by industry trends and practices. Our team members go beyond technical knowledge to ensure the content matches our goals and values. They share their ideas publicly when appropriate, enhancing our transparency and accountability. Our visitors receive insightful and trustworthy information because we hire only the best and brightest.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="slider">
        <div class="container">
            <h2>Our Editorial Team</h2>
            <div class="slider__wrapper">
                <div class="slider__content">
                    <div class="slider__items">
                        <div class="slider__item">
                            <img class="slider__item-img" src="{{ asset('images/slider_img.png') }}" alt="avatar">
                            <h3>Nancy Carrol</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="slider__item-socials">
                                <a href="#">
                                    <img src="{{ asset('images/facebook.svg') }}" alt="facebook">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin">
                                </a>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img class="slider__item-img" src="{{ asset('images/slider_img2.png') }}" alt="avatar">
                            <h3>Adam Tile</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="slider__item-socials">
                                <a href="#">
                                    <img src="{{ asset('images/facebook.svg') }}" alt="facebook">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin">
                                </a>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img class="slider__item-img" src="{{ asset('images/slider_img3.png') }}" alt="avatar">
                            <h3>Sarah Laws</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="slider__item-socials">
                                <a href="#">
                                    <img src="{{ asset('images/facebook.svg') }}" alt="facebook">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin">
                                </a>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img class="slider__item-img" src="{{ asset('images/slider_img4.png') }}" alt="avatar">
                            <h3>Amanda Pitt</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="slider__item-socials">
                                <a href="#">
                                    <img src="{{ asset('images/facebook.svg') }}" alt="facebook">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('build/assets/app-CNstysie.js') }}"></script>
</body>
</html>
