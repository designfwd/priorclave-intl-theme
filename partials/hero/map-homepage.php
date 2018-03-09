<?php
// Navigation-accompanying map for use on homepages that guide the user to country/region selection
?>
<section class="o-homepageMap">
  <h1 class="o-homepageMap__headline">
    Reliable. Flexible. Programmable. Affordable<br />
    <span class="o-homepageMap__headline--subhead">Autoclaves Worldwide</span>
  </h1>
  <div class="o-homepageMap__dropdown">
    <a id="homepageMap-dropdownMenu" class="a-dropdownLink" href="#">
      Select Your Country or Region <svg id="homepageMap-toggleIcon" class="a-dropdownLink a-dropdownLink--icon" viewBox="0 0 16 16"><?php get_svg('angle-down'); ?></svg>
    </a>
    <ul id="homepageMap-dropdownList" class="m-mapDropdown m-mapDropdown--hidden">
      <li class="m-mapDropdown__region">
        <a class="a-dropdownLink" href="#">Africa</a>
      </li>
      <li class="m-mapDropdown__region">
        <a class="a-dropdownLink" href="#">Asia Pacific</a>
      </li>
      <li class="m-mapDropdown__country">
        <a class="a-dropdownLink" href="#">
          <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg('flag-au'); ?></svg>Australia
        </a>
      </li>
      <li class="m-mapDropdown__country">
        <a class="a-dropdownLink" href="#">
          <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg('flag-my'); ?></svg>Malaysia
        </a>
      </li>
      <li class="m-mapDropdown__country">
        <a class="a-dropdownLink" href="#">
          <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg('flag-ph'); ?></svg>Philippines
        </a>
      </li>
      <li class="m-mapDropdown__region">
        <a class="a-dropdownLink" href="#">Europe</a>
      </li>
      <li class="m-mapDropdown__country">
        <a class="a-dropdownLink" href="#">
          <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg('flag-gb'); ?></svg>United Kingdom
        </a>
      </li>
      <li class="m-mapDropdown__region">
        <a class="a-dropdownLink" href="#">Middle East</a>
      </li>
      <li class="m-mapDropdown__region">
        <a class="a-dropdownLink" href="#">North America</a>
      </li>
      <li class="m-mapDropdown__country">
        <a class="a-dropdownLink" href="#">
          <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg('flag-ca'); ?></svg>Canada
        </a>
      </li>
      <li class="m-mapDropdown__country">
        <a class="a-dropdownLink" href="#">
          <svg class="a-dropdownLink a-dropdownLink--flag" viewBox="0 0 640 480"><?php get_svg('flag-us'); ?></svg>United States
        </a>
      </li>
      <li class="m-mapDropdown__region">
        <a class="a-dropdownLink" href="#">South America</a>
      </li>
    </ul>
  </div>
</section>
