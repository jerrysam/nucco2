{% extends 'layouts/application.html' %}

{% set title = " for Shaping Culture" %}
{% block head %}
  <meta name="description" content="Your corporate comms partner. We understand the challenges, collaborate with you to produce content, and visualise knowledge to help you develop enduring communications processes built on a deep understanding of your business goals and what makes your employees and customers tick.">
{% endblock %}

{% block content %}

  <!-- htmlmin:ignore -->
  <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      require_once __DIR__ . '/nuccobehance/vendor/autoload.php';
      $client = NuccoBrain\Services::getBehanceClient();
      $projects = $client->getCollectionProjects(60495105);
  ?>
  <!-- htmlmin:ignore -->


  {% set topsection = {
                        title: "<span>Hey Nick</span><span>the portfolio in this pages\' worksection</span><span>is connected to the \"Startups\" collection in Behance</span>",
  
                        video: "corp-reel"
                      }
  %}

  {% include "partials/topsection.html" %}


  {% set theme = { bg: 'light' } %}
  {% set basicsection = {
                            title: "Spacings are removed",
                            firstpara: "The margin \(below images\) and padding \(on edges\/sides of the popup\) are removed"
                         }
  %}
  {% include "partials/basicsection.html" %}


  {% include "partials/worksection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '“Absolute pleasure and professionalism in combination with artistic talents and production value.”',
                                author: '- Ilija Smiljanic (Brand Manager at Nature Immunity)',
                                bg: 'images/breaker8.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}
  
  {% set theme = { bg: 'dark' } %}
  {% set threeiconbasicsection = {    title: 'Your corporate comms partner',
                                      icon_one: 'culture_one',
                                      icon_two: 'culture_two',
                                      icon_three: 'culture_three',
                                      subtitle_one: 'Understand<br/>Challenge',
                                      subtitle_two: 'Collaborative<br/>Content<br/>Production',
                                      subtitle_three: 'Visualise<br/>Knowledge',
                                      firstpara: 'Nucco Brain is a visual storytelling studio\, with you for the long\-haul. We\'ll work with you to develop enduring communications processes built on a deep understanding of your business goals and what makes your employees and customers tick. Then we’ll back it up by collaboratively producing materials to visualise your knowledge\, leveraging a blend of traditional media and market\-leading technologies like VR and 360 video. That\'s how we get all the right people on your side\, without blowing the budget. It\'s how we get a simple message to stretch beyond its reach.'
                             }
  %}
  {% include "partials/threeiconbasicsection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '“I would be more than happy to recommend Nucco Brain to anyone. They are very professional and deliver on time and of the highest quality.”',
                                author: '- RAR recommendation',
                                bg: 'images/breaker9.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}


  {% set partnerlogos = {
                          imgurl: 'images/value3_clientlogos.png'
                         }
  %}
  {% include "partials/partnerlogos.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '“Nucco Brain is an innovative, flexible and fast-paced studio with a strong customer centric culture.”',
                                author: '- RAR recommendation',
                                bg: 'images/breaker10.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
