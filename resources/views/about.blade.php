@extends('layouts.jetsi')

@section('title', 'About us')
@section('nav', 'about')

@section('content')

@php
// Journal scope. 'numbered' => true shows a numbered list, false shows a bulleted list.
$scope = [
    ['title' => 'Mechanical Engineering', 'numbered' => true, 'items' => [
        'Sustainable energy systems (solar-thermal, wind, biomass, waste-to-energy)',
        'Thermo-fluids, heat transfer, and HVAC systems',
        'Advanced materials, composites, and manufacturing technologies',
        'Sustainable machine design and automation',
        'Robotics, mechatronics, and control engineering',
        'Renewable-energy storage systems (thermal, mechanical, hybrid)',
        'Energy efficiency, exergy analysis, and system optimization',
        'Automotive engineering, propulsion, and emissions reduction',
        'Computational fluid dynamics (CFD) and finite-element analysis (FEA)',
        'Refrigeration, cryogenics, and low-carbon cooling technologies',
    ]],
    ['title' => 'Civil Engineering', 'numbered' => true, 'items' => [
        'Sustainable construction materials and green building technologies',
        'Structural engineering and infrastructure resilience',
        'Water resources engineering, hydrology, and climate-adaptive design',
        'Transportation engineering and smart mobility systems',
        'Environmental engineering, pollution control, and waste management',
        'Geotechnical engineering and soil improvement for sustainability',
        'Urban planning, smart cities, and sustainable development frameworks',
        'Coastal and hydraulic engineering',
        'Disaster risk reduction and climate-resilient infrastructure',
    ]],
    ['title' => 'Electrical & Electronics Engineering', 'numbered' => true, 'items' => [
        'Renewable power systems: solar PV, wind, hydro, hybrid microgrids',
        'Power system planning, protection, and smart grid technologies',
        'Energy management systems and demand-side optimization',
        'Control systems, automation, and instrumentation',
        'Power electronics for sustainable energy conversion',
        'Embedded systems, IoT, and smart energy devices',
        'Sustainable telecommunications and ICT infrastructure',
        'High-voltage engineering and power quality improvement',
    ]],
    ['title' => 'Chemical Engineering', 'numbered' => true, 'items' => [
        'Sustainable chemical process design and optimization',
        'Green chemistry and environmentally benign processes',
        'Biofuels, biogas, and biomass conversion technologies',
        'Nanomaterials, catalysis, and advanced material synthesis',
        'Process safety, risk analysis, and hazard mitigation',
        'Water treatment, desalination, and environmental remediation',
        'Polymer engineering and composite materials',
        'Life cycle assessment (LCA) of chemical processes',
    ]],
    ['title' => 'Petroleum & Process Engineering', 'numbered' => true, 'items' => [
        'Sustainable oil & gas production technologies',
        'Enhanced oil recovery (EOR) and carbon-capture-assisted recovery',
        'Drilling engineering, wellbore stability, and geothermal drilling',
        'Reservoir engineering and simulation',
        'Pipeline engineering, flow assurance, and corrosion control',
        'Refining, petrochemical processing, and cleaner production methods',
        'Gas processing, LNG, LPG, and flare-gas utilization',
        'Transition pathways from fossil fuels to low-carbon energy systems',
        'Health, safety, and environment (HSE) in petroleum operations',
    ]],
    ['title' => 'Sustainable & Renewable Energy Technologies', 'numbered' => false, 'items' => [
        'Solar, wind, biomass, geothermal, hydrogen, nuclear, hybrid systems',
        'Energy efficiency and management',
        'Smart grids, microgrids, energy storage systems',
    ]],
    ['title' => 'Climate Change, Environment & Green Technologies', 'numbered' => false, 'items' => [
        'Climate modelling and mitigation',
        'Carbon capture, utilisation and storage (CCUS)',
        'Waste management',
        'Environmental impact assessment',
        'Circular economy and industrial ecology',
    ]],
    ['title' => 'Emerging Engineering Technologies', 'numbered' => false, 'items' => [
        'Artificial intelligence & machine learning applications in engineering',
        'IoT, robotics, automation, Industry 4.0',
        'Nanotechnology, smart materials, additive manufacturing',
        'Engineering modelling, simulation (CFD, FEM, FEA)',
    ]],
    ['title' => 'Engineering Management, Policy & Economics', 'numbered' => false, 'items' => [
        'Engineering economics and cost analysis',
        'Infrastructure management',
        'Energy policy and planning',
        'Sustainable industrial development',
    ]],
];
@endphp

  <div class="page-head">
    <div class="container"><h1>About Us</h1></div>
  </div>

  <main id="main" class="container page-layout">

    <aside class="toc" aria-label="On this page">
      <h2>On this page</h2>
      <nav>
        <a href="#about">About</a>
        <a href="#scope">Scope</a>
        <a href="#editorial">Editorial board</a>
        <a href="#guidelines">Author guidelines</a>
      </nav>
    </aside>

    <div class="doc">

      <!-- 1. ABOUT -->
      <section id="about">
        <h2>Journal of Engineering, Technology and Sustainable Innovation (JETSI)</h2>
        <p class="lead">The Journal of Engineering, Technology and Sustainable Innovation (JETSI) is a peer-reviewed interdisciplinary journal dedicated to advancing research, innovation, and development across all fields of engineering and applied technology. JETSI provides a platform for high-quality scholarly articles that address contemporary challenges and emerging frontiers in engineering, with a strong emphasis on sustainability, renewable energy, climate change mitigation, technological advancement, and sustainable industrial systems.</p>
      </section>

      <!-- 2. SCOPE -->
      <section id="scope">
        <h2>Scope includes, but is not limited to:</h2>
        <div class="panel-grid">
          @foreach ($scope as $panel)
          @php $tag = $panel['numbered'] ? 'ol' : 'ul'; @endphp
          <article class="card panel">
            <h3>{{ $panel['title'] }}</h3>
            <{{ $tag }} class="{{ $panel['numbered'] ? 'list-num' : 'list-dot' }}">
              @foreach ($panel['items'] as $item)
              <li>{{ $item }}</li>
              @endforeach
            </{{ $tag }}>
          </article>
          @endforeach
        </div>
      </section>

      <!-- 3. EDITORIAL BOARD (wording kept exactly as on the old site) -->
      <section id="editorial">
        <h2>EDITORIAL BOARD TEMPLATE</h2>
        <div class="panel-grid">
          <article class="card panel">
            <h3>Editorial Leadership</h3>
            <p class="label">Editor-in-Chief</p>
            <p>Engr. Prof. Fidelis I. Abam</p>
            <p>Dean, Faculty of Engineering</p>
            <p>University of Calabar, Nigeria</p>
            <p class="label">Deputy Editor-in-Chief</p>
          </article>
          <article class="card panel">
            <h3>Associate Editors (one per major engineering field)</h3>
            <ul class="list-dot">
              <li>Mechanical Engineering Editor</li>
              <li>Civil Engineering Editor</li>
              <li>Electrical/Electronic Engineering Editor</li>
              <li>Chemical/Petroleum Engineering Editor</li>
              <li>Computer Engineering/ICT Editor</li>
              <li>Environmental Engineering Editor</li>
              <li>Energy &amp; Sustainability Editor</li>
              <li>Industrial/Production Engineering Editor</li>
              <li>Materials &amp; Metallurgical Engineering Editor</li>
            </ul>
          </article>
          <article class="card panel">
            <h3>Editorial Advisory Board (National &amp; International)</h3>
            <p class="label">(Include 10-20 members from Africa, Europe, Middle East, and Asia) Example fields:</p>
            <ul class="list-dot">
              <li>Renewable Energy</li>
              <li>Climate Studies</li>
              <li>Structural Engineering</li>
              <li>Robotics &amp; Automation</li>
              <li>Materials Engineering</li>
              <li>Thermo-Fluid Sciences</li>
              <li>Industrial Systems Engineering</li>
            </ul>
          </article>
          <article class="card panel">
            <h3>Technical/Production Editors</h3>
            <ul class="list-dot">
              <li>Managing Editor</li>
              <li>Layout/Design Editor</li>
              <li>Web Administrator</li>
              <li>Sustainable industrial development</li>
            </ul>
          </article>
          <article class="card panel">
            <h3>Editorial Office</h3>
            <p>Faculty of Engineering</p>
            <p>University of Calabar</p>
            <p>Calabar, Nigeria</p>
          </article>
        </div>
      </section>

      <!-- 4. AUTHOR GUIDELINES -->
      <section id="guidelines">
        <h2>AUTHOR GUIDELINES</h2>
        <h3 class="sub">IEEE FORMAT (for Engineering &amp; Technology Papers)</h3>
        <div class="panel-grid">
          <article class="card panel">
            <h3>Manuscript Structure</h3>
            <ol class="list-num">
              <li>Title of the Paper</li>
              <li>Authors’ Names &amp; Affiliations</li>
              <li>Abstract (150-250 words)</li>
              <li>Keywords (4-6)</li>
              <li>Introduction</li>
              <li>Materials and Methods / Methodology</li>
              <li>Results</li>
              <li>Discussion</li>
              <li>Conclusion</li>
              <li>Acknowledgements (optional)</li>
              <li>Conflict of Interest</li>
              <li>References (IEEE style)</li>
            </ol>
          </article>
          <div>
            <article class="card panel" style="margin-bottom:20px">
              <h3>Formatting Requirements</h3>
              <ul class="list-dot">
                <li>Paper size: A4</li>
                <li>Font: Times New Roman, 10-pt</li>
                <li>Spacing: Single</li>
                <li>Columns: Double-column</li>
                <li>Margins: 1 inch</li>
                <li>Figures/Tables: Clear, high resolution</li>
              </ul>
            </article>
            <article class="card panel">
              <h3>Reference Style (IEEE)</h3>
              <p>Number references in the order they appear.</p>
              <p>[1] A. O. Ajayi and F. I. Abam, “Performance evaluation of hybrid renewable systems,” IEEE Trans. Sustain. Energy, vol. 13, no. 4, pp. 450–460, 2022.</p>
            </article>
          </div>
        </div>
      </section>

    </div>
  </main>

@endsection
