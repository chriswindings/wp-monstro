<?php
  $data = [
    "hero" => [
      "preHeading" => "DISRUPT WITH US:",
      "heading" => "We’re Hiring"
    ],
    "jobs" => []
  ];

query_posts(array(
  'post_type' => 'careers'
));

while (have_posts()) : the_post();

  $job = [
    "title" => get_field('title'),
    "location" => get_field('location'),
    "type" => get_field('type'),
    "linkedInLink" => get_field('linkedInLink'),
    "jobPageLink" => get_permalink(),
    "sortOrder" => get_field("sortOrder")
  ];
  array_push($data["jobs"], $job);
endwhile;

// sort the array by the sortOrder
usort($data["jobs"], function ($item1, $item2) {
  return $item1['sortOrder'] <=> $item2['sortOrder'];
});


return $data;
?>