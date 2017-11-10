
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

  {% set topsection = { title: "<span>People don't always like being</span><span>told they have to do things differently.</span><span>Until you craft them a picture</span><span>of their new reality</span>" } %}
  {% include "partials/topsection.html" %}

  <section class="section section_light basicsection">
    <div class="wrapper">
      <h3>Let's break through the resistance</h3>
      <p>
          The workplace can get pretty turbulent during times of crisis and change, and it’s in these moments that clear communication is more important than ever. But it also tends to strike with urgency, leaving you in a time-crunch that forces a compromise between quality and speed. Leading with a well-crafted story invites employees to step into the transformation and create it with you, so it's by far the most effective way to inspire long-lasting behavioural change.
      </p>
    </div>
  </section>

  {% include "partials/worksection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“We have now managed to engage Partners to increase contributions to their defined contribution pension accounts up to 38,314 individuals.”',
                                author: '- Jenny Hilling (Business Change Manager at the John Lewis Partnership)',
                                bg: 'images/breaker3.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}
  
  {% set theme = { bg: 'dark' } %}
  {% set corporatepartner = {   title: 'Your partner in creating change',
                                quote: 'Nucco Brain is a visual storytelling studio, with you for the long-haul. We\'ll work with you to develop communications strategies and campaigns built on a deep understanding of your business goals, the landscape, and what makes your employees tick. That\'s how our stories create long-lasting behavioural change, without blowing the budget. It\'s how we get content to stretch beyond its reach, beyond the confines of standard technology.'
                             }
  %}
  {% include "partials/corporatepartner.html" %}

  {% set theme = { bg: 'dark' } %}
 {% set horizontalsection = {  type: 'quote',
                                quote: '',
                                author: '',
                                bg: 'images/breaker2.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}

  <section class="section section_light clientsection">
    <div class="wrapper">
      <h4>Our partners</h4>
      <p>
         A sentence or two to go here talking about the clients we work with. Lorem ipsum dolor sit amet, 
         consectetuer adipiscing elit, sed diam nonummy nibh euismodt.
      </p>
      <img draggable="false" src="images/client_logos.jpg" alt="">
    </div>
  </section>

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“We have now managed to engage Partners to increase contributions to their defined contribution pension accounts up to 38,314 individuals.”',
                                author: '- Jenny Hilling (Business Change Manager at the John Lewis Partnership)',
                                bg: 'images/breaker7.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
