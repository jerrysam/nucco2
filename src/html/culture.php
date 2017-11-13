{% extends 'layouts/application.html' %}

{% block content %}

  <!-- htmlmin:ignore -->
  <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      require_once __DIR__ . '/nuccobehance/vendor/autoload.php';
      $client = NuccoBrain\Services::getBehanceClient();
      $projects = $client->getCollectionProjects(168437579);
  ?>
  <!-- htmlmin:ignore -->


  {% set topsection = { title: "<span>Sometimes the things you need to say</span><span>are a little... well, boring. Until you craft</span><span>that message into a story</span>" } %}


  {% include "partials/topsection.html" %}

  <section class="section section_light basicsection">
    <div class="wrapper">
      <h3>Let's make it worth repeating <?php echo("hello world") ?></h3>
      <p>
          Whether it's onboarding clients or delivering a series of training videos to your team, there's a far greater chance of your point being heard, actioned and shared if you tell the story well. And in helping them to get the message, you improve the overall brand experience for customers and employees because they know how to get the best from it. So it's time to bring those dull but essential operational messages to life, using whatever technology your story needs.

      </p>
    </div>
  </section>

  {% include "partials/worksection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“We have now managed to engage Partners to increase contributions to their defined contribution pension accounts up to 38,314 individuals.”',
                                author: '- Jenny Hilling (Business Change Manager at the John Lewis Partnership)',
                                bg: 'images/breaker8.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}
  
  {% set theme = { bg: 'dark' } %}
  {% set threeiconbasicsection = {    title: 'Your corporate comms partner',
                                      firstpara: 'Nucco Brain is a visual storytelling studio, with you for the long-haul. We\'ll work with you to develop long-term communications strategies built on a deep understanding of your business goals, the landscape, and what makes your stakeholders tick. That\'s how we get the message to all the right people, without blowing the budget. It\'s how we get content to stretch beyond its reach, beyond the confines of standard technology.',
                                      icon_one: 'culture_one',
                                      icon_two: 'culture_two',
                                      icon_three: 'culture_three'
                             }
  %}
  {% include "partials/threeiconbasicsection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“We have now managed to engage Partners to increase contributions to their defined contribution pension accounts up to 38,314 individuals.”',
                                author: '- Jenny Hilling (Business Change Manager at the John Lewis Partnership)',
                                bg: 'images/breaker9.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}


  {% set partnerlogos = {
                          subtitle: 'A sentence or two to go here talking about the clients we work with. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodt.',
                          imgurl: 'images/client_logos.png'
                         }
  %}
  {% include "partials/partnerlogos.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“We have now managed to engage Partners to increase contributions to their defined contribution pension accounts up to 38,314 individuals.”',
                                author: '- Jenny Hilling (Business Change Manager at the John Lewis Partnership)',
                                bg: 'images/breaker10.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
