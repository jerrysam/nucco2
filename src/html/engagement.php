{% extends 'layouts/application.html' %}

{% block content %}

  <!-- htmlmin:ignore -->
  <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      require_once __DIR__ . '/nuccobehance/vendor/autoload.php';
      $client = NuccoBrain\Services::getBehanceClient();
      $projects = $client->getCollectionProjects(168432761);
  ?>
  <!-- htmlmin:ignore -->


  {% set topsection = { title: "<span>It can be hard enough to</span><span>make someone hear you, until you craft</span><span>that message into a story</span>" } %}
  {% include "partials/topsection.html" %}

  <section class="section section_light basicsection">
    <div class="wrapper">
      <h3>Let's make it worth repeating</h3>
      <p>
          Stories stand the test of time for a reason - they weave their way into our minds like no other method of transmitting information has ever done. So when you need to be making your external stakeholders stand up and take note of the evolution of your business, you need a story they'll leverage and pass on. We want to help you do that, visually, and beat the time-crunch that's always hanging over the corporate comms team to communicate effectively.
      </p>
    </div>
  </section>

  {% include "partials/worksection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“Lycamobile and I are 100% satisfied with their work. We value our relationship with Nucco Brain and we have been continuously working with them ever since our first project”',
                                author: '- Parthipan Ragunathan (Global Head of Marketing Strategy PLanning at Lycamobile Group)',
                                bg: 'images/breaker5.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}
  
  {% set theme = { bg: 'dark' } %}
  {% set corporatepartner = {   title: 'Your sidekick in an evolving narrative',
                                quote: 'Nucco Brain is a visual storytelling studio, with you for the long-haul. We\'ll work with you to develop long-term communications strategies built on a deep understanding of your business goals, the landscape, and what makes your stakeholders tick. That\'s how we get the message to all the right people, without blowing the budget. It\'s how we\'ll put you back in control of your story and make content that stretches beyond its reach, beyond the confines of standard technology. Alongside strategy planning, we offer branding and constant production services.',
                                icon_one: 'engagement_one',
                                icon_two: 'engagement_two',
                                icon_three: 'engagement_three'
                             }
  %}
  {% include "partials/corporatepartner.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“Lycamobile and I are 100% satisfied with their work. We value our relationship with Nucco Brain and we have been continuously working with them ever since our first project”',
                                author: '- Parthipan Ragunathan (Global Head of Marketing Strategy PLanning at Lycamobile Group)',
                                bg: 'images/breaker4.jpg'
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

  {% set partnerlogos = { one: 'test',
                          quote: '“Lycamobile and I are 100% satisfied with their work. We value our relationship with Nucco Brain and we have been continuously working with them ever since our first project”',
                          author: '- Parthipan Ragunathan (Global Head of Marketing Strategy PLanning at Lycamobile Group)',
                          bg: 'images/breaker6.jpg'
                       }
  %}
  {% include "partials/partnerlogos.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = {  type: 'quote',
                                quote: '“Lycamobile and I are 100% satisfied with their work. We value our relationship with Nucco Brain and we have been continuously working with them ever since our first project”',
                                author: '- Parthipan Ragunathan (Global Head of Marketing Strategy PLanning at Lycamobile Group)',
                                bg: 'images/breaker6.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
