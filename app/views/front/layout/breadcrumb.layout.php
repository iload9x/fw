{{if(isset($breadCrumbs) && is_array($breadCrumbs)):}}
<ul class="breadcrumb">
{{foreach($breadCrumbs as $kbreadCrumb => $vbreadCrumb):}}
  <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="itemscope" class="crumb_item">
    <a itemprop="url" rel="up" class="crumb" href="{{# $vbreadCrumb['url'] }}"><span itemprop="title">{{# isset($vbreadCrumb['name']) ? $vbreadCrumb['name'] : '' }}</span></a>
  	{{if(isset($breadCrumbs[$kbreadCrumb + 1])):}}
  	<span class="arrow"> › </span>
  	{{endif}}
  </li>
{{endforeach}}
</ul>
{{endif}}
