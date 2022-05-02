<?php
require_once('./includes/header.php');
require_once('./includes/navbar.php');
?>
<header class="banner container">
            <div class="banner__container grid">
                <div class="banner__data">
                    <div class="banner__border">
                        <div class="banner__imagen">
                            <img src="assets/img/servicio.webp" alt="">
                        </div>
                    </div>
                    <h2 class="banner__name">Contrata los mejores servicios</h2>
                    <h3 class="banner__profession"></h3>
                    <ul class="banner__social">
                       <a href="" target="_blank" class="banner__social-link">Terapia</a>
                       <a href="" target="_blank" class="banner__social-link">Educación</a>
                       <a href="" target="_blank" class="banner__social-link">Tecnología</a>     
                    </ul>
                </div>
                <div class="banner__info grid">
                    <div class="banner__info-group">
                        <h3 class="banner__info-number">7</h3>
                        <p class="banner__info-description">años de <br> trabajo</p>
                    </div>
                    <div class="banner__info-group">
                        <h3 class="banner__info-number">+51</h3>
                        <p class="banner__info-description">Proyectos <br>completados </p>
                    </div>
                    <div class="banner__info-group">
                        <h3 class="banner__info-number">96</h3>
                        <p class="banner__info-description">categorias <br> asignadas</p>
                    </div>
                </div>
                <div class="banner__buttons">
                    <a href="" class="button">Ingresar</a>
                
                    <div class="banner__buttons-small">
                        <a href="" target="_blank" class="button butt__small button__gray">Registrarte</a>
                        <!-- <a href="" target="_blank" class="button butt__small button__gray">MS</a> -->
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <ul class="filters__content">
                <button class="filters__button filter-tab-active" data-target="#projects">
                    Projects
                </button>
                <button class="filters__button" data-target="#skills">
                    Skills
                </button>
            </ul>
        </main>
        