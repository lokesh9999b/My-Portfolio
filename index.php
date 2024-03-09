<?php include 'header.php'; ?>

<section id="hero">
  <div class="hero container">
    <div>
      <h1>I'm <span></span></h1>
      <h1>Lokesh<span></span></h1>
      <h1>Fullstack Developer<span></span></h1>
      
    </div>
  </div>
</section>

<section id="about">
  <div class="about container">

    <div class="col-right">
      <h1 class="section-title">About <span>me</span></h1>
      <h2></h2>
      <p><b>Analytical problem solver with a foundation in web development and hands-on AWS experience. Proficient in front-end and back-end technologies, adept at creating responsive web applications. As a dedicated team player, I am eager to contribute positively to dynamic work environments, bringing proactive problem-solving and a commitment to continuous learning.</b></p>
      <a id="downloadButton" class="cta">Download Resume</a>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>
</body>
<script>
  function downloadResume() {

    var pdfUrl = 'assets/BOMMAGAN_ LOKESH.pdf';
    var fileName = 'BOMMAGAN_ LOKESH.pdf';


    var a = document.createElement('a');
    a.href = pdfUrl;
    a.download = fileName;


    document.body.appendChild(a);


    a.click();

    document.body.removeChild(a);
  }

  document.getElementById('downloadButton').addEventListener('click', downloadResume);
</script>

</html>