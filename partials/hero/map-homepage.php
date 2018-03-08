<?php
// Navigation-accompanying map for use on homepages that guide the user to country/region selection
?>
<section class="o-homepageMap">
  <h1 class="o-homepageMap__headline">
    Reliable. Flexible. Programmable. Affordable<br />
    <span class="o-homepageMap__headline--subhead">Autoclaves Worldwide</span>
  </h1>
  <div class="o-homepageMap__dropdown">
    <a class="a-dropdownLabel" href="#">
      Select Your Country or Region <span class="a-dropdownLabel__icon"><?php get_svg('angle-down'); ?></span>
    </a>
  </div>
  <div class="o-homepageMap__dropdown">
    <select id="map-dropdown" class="m-mapDropdown">
      <option class="m-mapDropdown__initial" href="none" selected>
        Select Your Country or Region +
      </option>
      <option class="m-mapDropdown__region" href="/en-africa">
        Africa
      </option>
      <option class="m-mapDropdown__region">
        Asia Pacific
      </option>
      <option class="m-mapDropdown__country">
        - Australia
      </option>
      <option class="m-mapDropdown__country">
        - Malaysia
      </option>
      <option class="m-mapDropdown__country">
        - Philippines
      </option>
      <<option class="m-mapDropdown__region">
        Europe
      </option>
      <option class="m-mapDropdown__country">
        - United Kingdom
      </option>
      <option class="m-mapDropdown_region">
        Middle East
      </option>
      <option class="m-mapDropdown__region">
        North America
      </option>
      <option class="m-mapDropdown__country">
        - Canada
      </option>
      <option class="m-mapDropdown__country">
        - United States
      </option>
      <option class="m-mapDropdown__region">
        South America
      </option>
    </select>
  </div>
</section>
