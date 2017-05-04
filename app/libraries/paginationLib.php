<?php 
/**
* 
*/
class paginationLib
{

	function __construct()
	{
		$this->first_tag_html = "";
		$this->last_tag_html = "";
	    $this->next_tag_html = '<button name="post" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>';
	    $this->next_tag_disabled_html = '<button disabled name="post" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>';
	    $this->prev_tag_html = '<button name="post" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>';
	    $this->prev_tag_disabled_html = '<button disabled name="post" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>';
	    $this->num_tag_html = '<button name="post" value="{$id}" class="btn btn-default">{$id}</button>';
	    $this->cur_tag_html = '<button name="post" value="{$id}" class="btn btn-default active">{$id}</button>';
	}

	public function html($totalRecord, $curentPage, $perPage) {
		$html = '';
		$id = 1;
		$totalPage = ceil($totalRecord / $perPage);
		if($totalPage == 1) {
			return $html;
		}
		if(!$curentPage || $curentPage <= 0 || $curentPage > $totalPage) {
			$curentPage = 1;
		}

		if ($curentPage > 1) {
			$id = $curentPage - 1;
			$html .= str_replace('{$id}', $id, $this->prev_tag_html);
		} else {
			$id = $curentPage;
			$html .= str_replace('{$id}', $id, $this->prev_tag_disabled_html);
		}

    	$a = 1;
    	if(($curentPage - 3) > 1){
    		$a = $curentPage - 3;
    	}
        
	    for($i = $a; $i < $curentPage; $i++) {
	    	$id = $i;
			$html .= str_replace('{$id}', $id, $this->num_tag_html);
	    }
		$b = $totalPage;
		if(($curentPage + 3) < $totalPage) {
			$b = $curentPage + 3;
		}
		for($i = $curentPage; $i <= $b; $i++) {
			$id = $i;
			if($id == $curentPage) {
				$html .= str_replace('{$id}', $id, $this->cur_tag_html);
			} else {
				$html .= str_replace('{$id}', $id, $this->num_tag_html);
			}
		}
    	if ($curentPage < $totalPage) {
    		$id = $curentPage + 1;
    		$html .= str_replace('{$id}', $id, $this->next_tag_html);
    	} else {
    		$id = $curentPage;
    		$html .= str_replace('{$id}', $id, $this->next_tag_disabled_html);
    	}

    	return $html;
	}

}