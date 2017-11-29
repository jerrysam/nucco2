
{% extends 'layouts/application.html' %}

{% block content %}

<!-- htmlmin:ignore -->
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . '/nuccobehance/vendor/autoload.php';
    $client = NuccoBrain\Services::getBehanceClient();
    $projects = $client->getCollectionProjects(168437257);
?>
<!-- htmlmin:ignore -->

  {% set topsection = { title: "<span>People don't like to be told</span><span>they have to do things differently,</span><span>but evolution is necessecary</span>" } %}
  {% include "partials/topsection.html" %}

  <section class="section section_light basicsection">
    <div class="wrapper">
      <h3>Let's break through the resistance</h3>
      <p>
          The workplace can get pretty turbulent during times of crisis and change, and it’s in these moments that clear communication is more important than ever. Transformation also tends to strike with urgency, leaving you in a time-crunch that forces a compromise between quality and speed. 
          Leading with a well-crafted story invites employees to step into the transformation and create it with you. It's by far the most effective way to inspire long-lasting behavioural change.
      </p>
    </div>
  </section>

  {% include "partials/worksection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '“Nucco Brain supported us by producing a series of videos and infographics to simplify the pension explanations, so all 83000 partners could engage with and consider their own savings.”',
                                author: '- Jenny Hilling (Business Change Manager at the John Lewis Partnership)',
                                bg: 'images/breaker3.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}
  
  {% set theme = { bg: 'dark' } %}
  {% set threeiconbasicsection = {  title: 'Your partner in creating change',
                                    icon_one: 'change_one',
                                    icon_two: 'change_two',
                                    icon_three: 'change_three',
                                    subtitle_one: 'Formulate<br/>a Strategy',
                                    subtitle_two: 'Content<br/>Management',
                                    subtitle_three: 'Monitor<br/>& Adapt',
                                    firstpara: 'Nucco Brain is a visual storytelling studio\, with you for the long\-haul. We\'ll work with you to develop change communications strategies built on a deep understanding of your business goals and what makes your employees tick. Then we’ll back it up with content production\, leveraging a tailored blend of traditional media and market\-leading technologies like VR and 360 video\, and evolve our methods as we monitor results. That\'s how our stories create long\-lasting behavioural change\, without blowing the budget. It\'s how we get content to stretch beyond its reach.'
                             }
  %}
  {% include "partials/threeiconbasicsection.html" %}

  {% set theme = { bg: 'dark' } %}
 {% set breakersection = {      type: 'quote',
                                quote: '“I was impressed with their creative thinking\, their positive attitude and their willingness to go the extra mile”',
                                author: 'Daniele Orner-Ginor (Head of Digital Intelligence\, BBH)',
                                bg: 'images/breaker2.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}


  {% set partnerlogos = {
                          subtitle: 'A sentence or two to go here talking about the clients we work with. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodt.',
                          imgurl: 'images/client_logos.png'
                         }
  %}
  {% include "partials/partnerlogos.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '“The Nucco Brain team came to us via recommendation and they lived up to every bit of their reputation.”',
                                author: '- James du Boulay (Head of Sale \& Marketing at P3P Partners)',
                                bg: 'images/breaker7.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
