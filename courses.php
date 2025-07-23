<!-- bca.php -->
<?php
// Set content type
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BCA - DK Admission Consulting</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Optional: Add some spacing between program sections */
    .program-section {
      margin-bottom: 4rem;
    }
    /* Ensure images don't get too large on bigger screens */
    .program-section img {
      max-height: 300px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Header -->
<?php include 'header.php'; ?>

<div class="container my-5">

  <!-- Each Program Section -->
  <section class="program-section">
    <h2 class="text-center mb-4">X-Ray Technician</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="assets/images/xray.jpg" alt="X-Ray Technician" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>X-Ray Technician is a 2-year course focused on radiographic imaging and diagnostic techniques.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with Science stream</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">BMLT</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
        <img src="assets/images/bmlt.jpg" alt="BMLT" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6 order-lg-1">
        <h5 class="text-warning">Program Overview</h5>
        <p>Bachelor in Medical Laboratory Technology (BMLT) is a 3-year undergraduate program focused on laboratory diagnostics.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with Science stream</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">DMLT</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="assets/images/dmlt.jpg" alt="DMLT" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>Diploma in Medical Laboratory Technology (DMLT) is a 2-year diploma course that trains students in clinical lab skills.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with Science stream</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">OTT</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
        <img src="assets/images/ott.jpg" alt="OTT" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6 order-lg-1">
        <h5 class="text-warning">Program Overview</h5>
        <p>Operation Theatre Technology (OTT) is a 2-year diploma program focused on surgical and anesthesia support training.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with Science stream</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">B.Tech (All Branches)</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="assets/images/btech.jpg" alt="B.Tech" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>Bachelor of Technology (B.Tech) is a 4-year undergraduate program in various engineering branches like CSE, ECE, ME, CE, IT, etc.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>4 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹60,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with PCM (Physics, Chemistry, Mathematics)</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">Bachelor of Computer Applications (BCA)</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
        <img src="assets/images/bca.jpg" alt="BCA" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6 order-lg-1">
        <h5 class="text-warning">Program Overview</h5>
        <p>BCA is a 3-year undergraduate program focusing on computer applications and software development, suitable for careers in IT, software, and more.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹20,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with Mathematics</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">Master of Commerce (M.Com)</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="assets/images/mcom.jpg" alt="M.Com" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>M.Com is a 2-year postgraduate degree focused on advanced studies in commerce, accounting, finance, and economics.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹15,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>B.Com or equivalent</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">Bachelor of Business Administration (BBA)</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
        <img src="assets/images/bba.jpg" alt="BBA" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6 order-lg-1">
        <h5 class="text-warning">Program Overview</h5>
        <p>BBA is a 3-year management degree that lays a foundation in business principles and management skills.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹15,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 in any stream</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">Bachelor of Commerce (Hons.)</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="assets/images/bcomm.jpg" alt="BCom" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>B.Com (Hons.) is a 3-year undergraduate degree with a focus on commerce, finance, accounting, and management principles.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹15,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 in any stream</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">D.Pharm</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
        <img src="assets/images/dpharma.jpg" alt="D.Pharm" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6 order-lg-1">
        <h5 class="text-warning">Program Overview</h5>
        <p>Diploma in Pharmacy (D.Pharm) is a 2-year program that focuses on pharmacy fundamentals and pharmaceutical science.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹70,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with PCB/PCM</p>
      </div>
    </div>
  </section>

  <section class="program-section">
    <h2 class="text-center mb-4">B.Pharm</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="assets/images/bpharma.jpg" alt="B.Pharm" class="img-fluid rounded" />
      </div>
      <div class="col-lg-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>Bachelor of Pharmacy (B.Pharm) is a 4-year undergraduate course in pharmaceutical sciences and drug development.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>4 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹70,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with PCB/PCM</p>
      </div>
    </div>
  </section>
 
  <!-- B.Pharm (Lateral Entry) -->
  <section class="mb-5">
    <h2 class="text-center mb-4">B.Pharm (Lateral Entry)</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/bpharma.jpg" alt="B.Pharm Lateral Entry" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>This 3-year lateral entry B.Pharm program is designed for students who have completed a Diploma in Pharmacy.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹70,000 per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>Diploma in Pharmacy</p>
      </div>
    </div>
  </section>

  <!-- LL.B -->
  <section class="mb-5">
    <h2 class="text-center mb-4">LL.B</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/llb.jpg" alt="LLB" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>LL.B is a 3-year professional law degree for graduates who want to pursue a legal career.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>Graduation with minimum 45% marks</p>
      </div>
    </div>
  </section>

  <!-- B.A. LL.B -->
  <section class="mb-5">
    <h2 class="text-center mb-4">B.A. LL.B</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/ballb.jpg" alt="BA LLB" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>A 5-year integrated law program combining Bachelor of Arts with Bachelor of Laws.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>5 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with minimum 45% marks</p>
      </div>
    </div>
  </section>

  <!-- B.B.A. LL.B -->
  <section class="mb-5">
    <h2 class="text-center mb-4">B.B.A. LL.B</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/bballb.jpg" alt="BBA LLB" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>Integrated 5-year law degree combining Bachelor of Business Administration with Bachelor of Laws.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>5 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with minimum 45% marks</p>
      </div>
    </div>
  </section>

  <!-- LL.M -->
  <section class="mb-5">
    <h2 class="text-center mb-4">LL.M</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/llm.jpg" alt="LLM" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>LL.M is a 2-year postgraduate degree in law for students who have completed LL.B.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>Undergraduate Degree in Law (LL.B)</p>
      </div>
    </div>
  </section>

  <!-- B.Com LL.B -->
  <section class="mb-5">
    <h2 class="text-center mb-4">B.Com LL.B</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/bcomllb.jpg" alt="BCom LLB" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>Integrated course combining commerce and law education for students aspiring to work in corporate legal sectors.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>5 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 (Any Stream) with minimum 45% marks</p>
      </div>
    </div>
  </section>

  <!-- MBA -->
  <section class="mb-5">
    <h2 class="text-center mb-4">MBA</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/mba.jpg" alt="MBA" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>MBA is a 2-year postgraduate program in business administration, leadership, and strategic management.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>Graduation in any stream</p>
      </div>
    </div>
  </section>

  <!-- MCA -->
  <section class="mb-5">
    <h2 class="text-center mb-4">MCA</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/mca.jpg" alt="MCA" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>MCA is a postgraduate degree focusing on computer science, software development, and IT management.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>Bachelor’s degree with Mathematics or Computer Science</p>
      </div>
    </div>
  </section>

  <!-- B.Sc -->
  <section class="mb-5">
    <h2 class="text-center mb-4">B.Sc</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/bsc.png" alt="BSc" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>B.Sc is a 3-year undergraduate program in science disciplines such as Physics, Chemistry, Biology, or Mathematics.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 with Science stream</p>
      </div>
    </div>
  </section>

  <!-- M.Sc -->
  <section class="mb-5">
    <h2 class="text-center mb-4">M.Sc</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/msc.jpeg" alt="MSc" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>M.Sc is a 2-year postgraduate science degree in disciplines like Physics, Chemistry, or Life Sciences.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>B.Sc in the relevant discipline</p>
      </div>
    </div>
  </section>

  <!-- B.A -->
  <section class="mb-5">
    <h2 class="text-center mb-4">B.A</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/ba.jpeg" alt="BA" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>B.A is a 3-year undergraduate program in humanities, social sciences, or liberal arts.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>3 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>10+2 in any stream</p>
      </div>
    </div>
  </section>

  <!-- M.A -->
  <section class="mb-5">
    <h2 class="text-center mb-4">M.A</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/ma.jpg" alt="MA" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <h5 class="text-warning">Program Overview</h5>
        <p>M.A is a 2-year postgraduate degree in arts, literature, languages, or social sciences.</p>
        <h5 class="text-warning mt-4">Duration</h5>
        <p>2 Years</p>
        <h5 class="text-warning mt-4">Annual Fee</h5>
        <p>₹XX,XXX per year</p>
        <h5 class="text-warning mt-4">Eligibility</h5>
        <p>Bachelor's degree in relevant stream</p>
      </div>
    </div>
  </section>

</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


