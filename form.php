<?php
$formFieldJson = '[
   {
      "type":"checkbox-group",
      "label":"REFERENTIE",
      "className":"Referentie",
      "name":"fb_referentie_checkbox",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_referentie_checkbox",
      "editable":"Yes",
      "values":[
         {
            "label":"Afgenomen",
            "value":"Referentie",
            "selected":true
         }
      ]
   },
   {
      "type":"textarea",
      "label":"Referentie tekst",
      "className":"form-control",
      "name":"fb_referentie_txt",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_referentie_txt",
      "editable":"Yes"
   },
   {
      "type":"text",
      "label":"Hoe lang al?",
      "placeholder":"Hoe lang zit je er al? Loopt nog minimaal tot?",
      "className":"form-control",
      "name":"fb_on_project_since",
      "subtype":"text",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_on_project_since",
      "editable":"Yes"
   },
   {
      "type":"select",
      "label":"VAN",
      "placeholder":"Maand",
      "className":"form-control short-inline-width",
      "name":"fb_month_from",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_month_from",
      "editable":"Yes",
      "values":[
         {
            "label":"Jan",
            "value":"Jan",
            "selected":true
         },
         {
            "label":"Feb",
            "value":"Feb"
         },
         {
            "label":"Mrt",
            "value":"Mrt"
         },
         {
            "label":"Apr",
            "value":"Apr"
         },
         {
            "label":"Mei",
            "value":"Mei"
         },
         {
            "label":"Jun",
            "value":"Jun"
         },
         {
            "label":"Jul",
            "value":"Jul"
         },
         {
            "label":"Aug",
            "value":"Aug"
         },
         {
            "label":"Sep",
            "value":"Sep"
         },
         {
            "label":"Okt",
            "value":"Okt"
         },
         {
            "label":"Nov",
            "value":"Nov"
         },
         {
            "label":"Dec",
            "value":"Dec"
         }
      ]
   },
   {
      "type":"select",
      "label":"undefined",
      "placeholder":"Jaar",
      "className":"form-control short-inline-width",
      "name":"fb_year_from",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_year_from",
      "editable":"Yes",
      "values":[
         {
            "label":"2005",
            "value":"2005",
            "selected":true
         },
         {
            "label":"2006",
            "value":"2006"
         },
         {
            "label":"2007",
            "value":"2007"
         },
         {
            "label":"2008",
            "value":"2008"
         },
         {
            "label":"2009",
            "value":"2009"
         },
         {
            "label":"2010",
            "value":"2010"
         },
         {
            "label":"2011",
            "value":"2011"
         },
         {
            "label":"2012",
            "value":"2012"
         },
         {
            "label":"2013",
            "value":"2013"
         },
         {
            "label":"2014",
            "value":"2014"
         },
         {
            "label":"2015",
            "value":"2015"
         },
         {
            "label":"2016",
            "value":"2016"
         },
         {
            "label":"2017",
            "value":"2017"
         },
         {
            "label":"2018",
            "value":"2018"
         },
         {
            "label":"2019",
            "value":"2019"
         }
      ]
   },
   {
      "type":"select",
      "label":"TOT",
      "placeholder":"Maand",
      "className":"form-control short-inline-width",
      "name":"fb_month_till",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_month_till",
      "editable":"Yes",
      "values":[
         {
            "label":"Jan",
            "value":"Jan",
            "selected":true
         },
         {
            "label":"Feb",
            "value":"Feb"
         },
         {
            "label":"Mrt",
            "value":"Mrt"
         },
         {
            "label":"Apr",
            "value":"Apr"
         },
         {
            "label":"Mei",
            "value":"Mei"
         },
         {
            "label":"Jun",
            "value":"Jun"
         },
         {
            "label":"Jul",
            "value":"Jul"
         },
         {
            "label":"Aug",
            "value":"Aug"
         },
         {
            "label":"Sep",
            "value":"Sep"
         },
         {
            "label":"Okt",
            "value":"Okt"
         },
         {
            "label":"Nov",
            "value":"Nov"
         },
         {
            "label":"Dec",
            "value":"Dec"
         }
      ]
   },
   {
      "type":"select",
      "label":"undefined",
      "placeholder":"Jaar",
      "className":"form-control short-inline-width",
      "name":"fb_year_till",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_year_till",
      "editable":"Yes",
      "values":[
         {
            "label":"Heden",
            "value":"present",
            "selected":true
         },
         {
            "label":"2005",
            "value":"2005"
         },
         {
            "label":"2006",
            "value":"2006"
         },
         {
            "label":"2007",
            "value":"2007"
         },
         {
            "label":"2008",
            "value":"2008"
         },
         {
            "label":"2009",
            "value":"2009"
         },
         {
            "label":"2010",
            "value":"2010"
         },
         {
            "label":"2011",
            "value":"2011"
         },
         {
            "label":"2012",
            "value":"2012"
         },
         {
            "label":"2013",
            "value":"2013"
         },
         {
            "label":"2014",
            "value":"2014"
         },
         {
            "label":"2015",
            "value":"2015"
         },
         {
            "label":"2016",
            "value":"2016"
         },
         {
            "label":"2017",
            "value":"2017"
         },
         {
            "label":"2018",
            "value":"2018"
         },
         {
            "label":"2019",
            "value":"2019"
         }
      ]
   },
   {
      "type":"textarea",
      "label":"Waarom gekozen?",
      "placeholder":"Waarom heb je voor deze opdracht gekozen?",
      "className":"form-control",
      "name":"why_current_job",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.why_current_job",
      "editable":"Yes"
   },
   {
      "type":"text",
      "label":"Functie titel?",
      "placeholder":"Functie titel?",
      "className":"form-control",
      "name":"fb_functie_title",
      "subtype":"text",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_functie_title",
      "editable":"Yes"
   },
   {
      "type":"textarea",
      "label":"Wat doe\/deed je precies?",
      "description":"STARR -  Situatie \/ Taken \/ Aanpak \/ Resultaat \/ Refectie",
      "placeholder":"Situatie - Wat doe\/deed je precies?",
      "className":"form-control",
      "name":"cj_discribtion",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.cj_discribtion",
      "editable":"Yes"
   },
   {
      "type":"textarea",
      "label":"Wat was de technische uitdaging \/ Rol precies?",
      "description":"STARR -  Situatie \/ Taken \/ Aanpak \/ Resultaat \/ Refectie",
      "placeholder":"Taak - Wat was de technische uitdaging \/ Rol precies?",
      "className":"form-control",
      "name":"technical_challanges",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.technical_challanges",
      "editable":"Yes"
   },
   {
      "type":"textarea",
      "label":"Hoe heb je dat aangepakt?",
      "description":"STARR -  Situatie \/ Taken \/ Aanpak \/ Resultaat \/ Refectie",
      "placeholder":"Activiteit - Hoe heb je dat aangepakt?",
      "className":"form-control",
      "name":"fb_textarea_1520436623166",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_textarea_1520436623166",
      "editable":"Yes"
   },
   {
      "type":"textarea",
      "label":"Wat was het resultaat \/ Hoe ver staat het project nu",
      "description":"STARR -  Situatie \/ Taken \/ Aanpak \/ Resultaat \/ Refectie",
      "placeholder":"Resultaat - Wat was het resultaat \/ Hoe ver staat het project nu",
      "className":"form-control",
      "name":"fb_cj_starr_resultaat",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_cj_starr_resultaat",
      "editable":"Yes"
   },
   {
      "type":"textarea",
      "label":"Wat zou je achteraf gezien anders aanpakken?",
      "description":"STARR -  Situatie \/ Taken \/ Aanpak \/ Resultaat \/ Refectie",
      "placeholder":"Reflectie - Wat zou je achteraf gezien anders aanpakken?",
      "className":"form-control",
      "name":"fb_cj_starr_reflectie",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.fb_cj_starr_reflectie",
      "editable":"Yes"
   },
   {
      "type":"textarea",
      "label":"IT landschap?",
      "placeholder":"Met welke andere applicaties en technieken kom je ook in aanraking?",
      "className":"form-control",
      "name":"other_technics",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.other_technics",
      "editable":"Yes"
   },
   {
      "type":"textarea",
      "label":"Hoe bij huidige opdracht terecht gekomen?",
      "placeholder":"Hoe bij huidige opdracht terecht gekomen?",
      "className":"form-control",
      "name":"how_placed",
      "subtype":"textarea",
      "tableOPA":"PersonCurrentJob",
      "fieldOPA":"PersonCurrentJob.how_placed",
      "editable":"Yes"
   }
]';
 function buildHtmlFormFromJson($formBuilderJson=null,$formData=null,$defaultInputClass='')
    {
        if(!is_null($formBuilderJson))
        {
            $formJsonArray = array();
            $formJsonArray = json_decode($formBuilderJson, true);
            if(!empty($formJsonArray))
            {
                foreach ($formJsonArray as $key => $value)
                {
                    if(isset($value['description']) && !empty($value['description']))
                    {
                        $helptext = $value['description'];
                        preg_match_all('#\((.*?)\)#', $helptext, $match);
                        if(isset($match[1]) && !empty($match[1]))
                        {
                            foreach($match[1] as $mkey=>$mvalue)
                            {
                                $splitText = explode('.',$mvalue);
                                if(isset($splitText[0]) && isset($splitText[1]) && !empty($splitText[0]) && !empty($splitText[1]))
                                {
                                    if(isset($formData[0][$splitText[0]]) && isset($formData[0][$splitText[0]][$splitText[1]]) && !empty($formData[0][$splitText[0]][$splitText[1]]))
                                    {
                                        $searchText = '('.$mvalue.')';
                                        $replaceText = $formData[0][$splitText[0]][$splitText[1]];
                                        
                                        $checkDate = explode('-',$replaceText);
                                        if(sizeof($checkDate) == 3)
                                        {
                                            list($yyyy,$mm,$dd) = explode('-',$replaceText);
                                            if(isset($yyyy)  && isset($mm) && isset($dd) && is_numeric($yyyy) && is_numeric($mm) && is_numeric($dd))
                                            {
                                                if (checkdate($mm,$dd,$yyyy)) {
                                                      $replaceText = $dd.'-'.$mm.'-'.$yyyy;
                                                }
                                            }
                                        }
                                        if(isset($value['type']) && $value['type'] == 'date')
                                        {
                                            $replaceText = date('d-m-Y',strtotime($replaceText));
                                        }
                                        $value['description'] = str_replace($searchText,$replaceText , $value['description']);
                                    }
                                }
                            }
                        }
                    }
                    //------------
                    $disabled = false;
                    $readonly = false;
                    if(isset($value['editable']) && $value['editable'] == 'No')
                    {
                        $disabled = true;
                        $readonly = true;
                    }
                    $value['label'] = (isset($value['label']) && $value['label'] == 'undefined')?'&nbsp;':$value['label'];
                    $class =  (isset($value['className']))?$value['className']:'';
                    $trClass = $class;
                    $type = $value['type'];
                    $tableOPA = $modelAlias = (isset($value['tableOPA']))?$value['tableOPA']:null;
                    $fieldOPA = (isset($value['fieldOPA']))?$value['fieldOPA']:null;
                    if(is_null($tableOPA) && is_null($fieldOPA) && ($type != 'header' && $type != 'paragraph'))
                    {
                        continue;
                    }
                    if($type == 'header')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <h3><?php echo $label;?></h3>
                            </td>
                        </tr>
                        <?php
                    }
                    else if($type == 'paragraph')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <p style="margin:5px 0;"><?php echo $label;?></p>
                            </td>
                        </tr>
                        <?php
                    }
                    else if($type == 'textarea')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <?php
                                if(!empty($label))
                                {
                                    if(isset($value['description']) && !empty($value['description']))
                                    {
                                        ?>
                                        <label style="color:#666666;text-align:left;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span><a class="helpTooltip tooltip" href="javascript:void(0)" title="<?php echo $value['description'];?>">?</a></label>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <label style="color:#666666;text-align:left;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span></label>
                                        <?php
                                    }
                                }
                                ?>
                                <textarea name="<?php echo $modelAlias.'.'.$fieldName;?>" id="<?php echo $modelAlias.$idIndex;?>" class="<?php echo $defaultInputClass;?>" placeholder="<?php echo $placeholder;?>" disabled="<?php echo disabled;?>" readonly="<?php echo $readonly;?>"><?php echo $formValue;?></textarea>
                            </td>
                        </tr>
                        <?php
                    }
                    else if($type == 'hidden')
                    {
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                            	<input name="data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]" id="<?php echo $modelAlias.$idIndex;?>" data-adaptheight="" class="<?php echo $defaultInputClass;?>" style="width: 98%;height:22px;" placeholder="<?php echo $placeholder;?>" value="<?php echo $formValue;?>" maxlength="255" type="hidden" <?php echo ($disabled)?'disabled':'';?> <?php echo ($readonly)?'readonly':'';?>> 
                            </td>
                        </tr>
                        <?php
                    }
                    else if($type == 'text')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <?php
                                if(!empty($label))
                                {
                                    if(isset($value['description']) && !empty($value['description']))
                                    {
                                        ?>
                                        <label style="color:#666666;text-align:left;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span><a class="helpTooltip tooltip" href="javascript:void(0)" title="<?php echo $value['description'];?>">?</a></label>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <label style="color:#666666;text-align:left;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span></label>
                                        <?php
                                    }
                                }
                                ?>
                                <input name="data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]" id="<?php echo $modelAlias.$idIndex;?>" data-adaptheight="" class="<?php echo $defaultInputClass;?>" style="width: 98%;height:22px;" placeholder="<?php echo $placeholder;?>" value="<?php echo $formValue;?>" maxlength="255" type="text" <?php echo ($disabled)?'disabled':'';?> <?php echo ($readonly)?'readonly':'';?>>
                            </td>
                        </tr>
                        <?php
                    }
                    else if($type == 'number')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <div style="margin-top:3px;">
                                    <?php
                                    if(!empty($label))
                                    {
                                        if(isset($value['description']) && !empty($value['description']))
                                        {
                                            ?>
                                            <label style="color:#666666;text-align:left;width:auto;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span><a class="helpTooltip tooltip" href="javascript:void(0)" title="<?php echo $value['description'];?>">?</a></label>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label style="color:#666666;text-align:left;width:auto;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span></label>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <input name="data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]" id="<?php echo $modelAlias.$idIndex;?>" data-adaptheight="" class="<?php echo $defaultInputClass;?>" style="width: 98%;height:22px;" placeholder="<?php echo $placeholder;?>" value="<?php echo $formValue;?>" maxlength="255" type="number" <?php echo ($disabled)?'disabled':'';?> <?php echo ($readonly)?'readonly':'';?>>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    else if($type == 'file')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <fieldset style="width: 93.5%;">
                                    <?php
                                    if(!empty($label))
                                    {
                                        if(isset($value['description']) && !empty($value['description']))
                                        {
                                            ?>
                                            <legend class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?><a class="helpTooltip tooltip" href="javascript:void(0)"title="<?php echo $value['description'];?>">?</a></legend>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <legend class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></legend>
                                            <?php
                                        }
                                    }
                                    ?>
                                	<input name="data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]" id="<?php echo $modelAlias.$idIndex;?>" data-adaptheight="" class="<?php echo $defaultInputClass;?>" style="width: 98%;height:22px;" placeholder="<?php echo $placeholder;?>" value="<?php echo $formValue;?>" maxlength="255" type="file" <?php echo ($disabled)?'disabled':'';?> <?php echo ($readonly)?'readonly':'';?>>
                                </fieldset>
                            </td>
                        </tr>
                        <?php
                    }
                    elseif($type == 'select')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        $options = array();
                        if(isset($value['values']) && !empty($value['values']))
                        {
                            foreach ($value['values'] as $innerkey => $innervalue)
                            {
                                $options[$innervalue['value']] = $innervalue['label'];
                            }
                        }
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <?php
                                if(!empty($label))
                                {
                                    if(isset($value['description']) && !empty($value['description']))
                                    {
                                        ?>
                                        <label style="color:#666666;text-align:left;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span><a class="helpTooltip tooltip" href="javascript:void(0)" title="<?php echo $value['description'];?>">?</a></label>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <label style="color:#666666;text-align:left;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span></label>
                                        <?php
                                    }
                                }
                                ?>
                                <select name="data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]" id="<?php echo $modelAlias.$idIndex;?>" data-adaptheight="" class="<?php echo $defaultInputClass;?>" style="width: 98%;" <?php echo ($disabled)?'disabled':'';?> <?php echo ($readonly)?'readonly':'';?>>
                                <option value=""><?php echo $placeholder;?></option>
                                <?php
                                if(!empty($options))
                                {
                                	foreach($options as $key=>$value)
                                	{
                                		?>
                                		<option value="<?php echo $key;?>"><?php echo $value;?></option>
                                		<?php
                                	}
                                }
                                ?>
                                <select>
                            </td>
                        </tr>
                        <?php
                    }
                    elseif($type == 'radio-group')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        $options = array();
                        if(isset($value['values']) && !empty($value['values']))
                        {
                            foreach ($value['values'] as $innerkey => $innervalue)
                            {
                                $options[$innervalue['value']] = $innervalue['label'];
                            }
                        }
                        $checked = false;
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?> radioFormBuilderTd">
                                <fieldset style="width: 93.5%;border:0;margin: 0;padding: 5px 0;margin-top:2px;">
                                <?php
                                if(isset($value['description']) && !empty($value['description']))
                                {
                                    ?>
                                    <legend class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?><a class="helpTooltip tooltip" href="javascript:void(0)" title="<?php echo $value['description'];?>">?</a></legend>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <legend class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></legend>
                                    <?php
                                }?>
                                
                                <?php
                                if(isset($value['values']) && !empty($value['values']))
                                {
                                    foreach ($value['values'] as $innerkey => $innervalue)
                                    {
                                        $checked = false;
                                        if(!empty($formValue))
                                        {
                                            if($innervalue['value'] == $formValue)
                                            {
                                                $checked = true;
                                            }
                                        }
                                        
                                        ?>
                                        <div style="display:inline-block">
                                            <input name="data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]" value="<?php echo $innervalue['value'];?>" id="<?php echo $modelAlias.$idIndex.$innervalue['value'];?>" type="radio" class="<?php echo $defaultInputClass;?>" <?php echo ($checked)?'checked':'';?>>
                                            <label for="<?php echo $modelAlias.$idIndex.$innervalue['value'];?>" style="width: auto;margin: 0;float: right;margin-left: 5px;white-space: normal;"><?php echo $innervalue['label'];?></label>
                                        </div>
                                    
                                        <?php
                                    }
                                }
                                ?>
                                
                                </fieldset>
                                <?php //echo $form->input($modelAlias.'.'.$fieldName, array('type'=>'radio','id' => $modelAlias.$idIndex,'data-adaptheight'=>'','class'=>$defaultInputClass, 'label' => false, 'div' => false,'options'=>$options,'style' => 'margin-left: 10px;margin-right: 5px;clear: both;display: inline-block;','placeholder'=>$placeholder,'value'=>$formValue,'disabled'=>$disabled,'readonly'=>$readonly));?>
                                <style type="text/css">
                                    .radioFormBuilderTd fieldset {
                                        width:93.5%;
                                    }
                                </style>
                            </td>
                        </tr>
                        <?php
                    }
                    elseif($type == 'checkbox-group')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        if(!empty($formValue))
                        {
                            $formValue = explode(',', $formValue);
                        }
                        $options = array();
                        if(isset($value['values']) && !empty($value['values']))
                        {
                            foreach ($value['values'] as $innerkey => $innervalue)
                            {
                                $options[$innervalue['value']] = $innervalue['label'];
                            }
                        }
                        $checked = false;
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <fieldset style="width: 93.5%;border:0;margin: 0;padding: 5px 0;">
                                    <?php
                                    if(!empty($label))
                                    {
                                        if(isset($value['description']) && !empty($value['description']))
                                        {
                                            ?>
                                            <legend class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?><a class="helpTooltip tooltip" href="javascript:void(0)" title="<?php echo $value['description'];?>">?</a></legend>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <legend class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></legend>
                                            <?php
                                        }
                                    }
                                    ?>
                                <?php
                                if(isset($value['values']) && !empty($value['values']))
                                {
                                    foreach ($value['values'] as $innerkey => $innervalue)
                                    {
                                        $checked = false;
                                        if(!empty($formValue))
                                        {
                                            if(array_search($innervalue['value'],$formValue) !== false)
                                            {
                                                $checked = true;
                                            }
                                        }
                                        
                                        ?>
                                        <div>
                                            <input name="data[checkbox][<?php echo $modelAlias;?>][<?php echo $fieldName;?>][]" value="<?php echo $innervalue['value'];?>" id="<?php echo $modelAlias.$idIndex.$innervalue['value'];?>" type="checkbox" class="<?php echo $defaultInputClass;?> currentjobformbuildercheckbox" <?php echo ($checked)?'checked':'';?> <?php echo ($disabled)?'disabled':'';?> <?php echo ($readonly)?'readonly':'';?>>
                                            <label for="<?php echo $modelAlias.$idIndex.$innervalue['value'];?>" style="width: auto;margin: 0;white-space: normal;"><?php echo $innervalue['label'];?></label>
                                        </div>
                                    
                                        <?php
                                    }
                                }
                                ?>
                                </fieldset>
                            </td>
                        </tr>
                        <?php
                    }
                    else if($type == 'date')
                    {
                        $label = (isset($value['label']))?$value['label']:'';
                        $fieldName = $value['name'];
                        $idIndex = ucwords(str_replace('_',' ',$value['name']));
                        $idIndex = (str_replace(' ','',$idIndex));
                        $placeholder = (isset($value['placeholder']))?$value['placeholder']:'';
                        $required = (isset($value['required']))?$value['required']:0;
                        $formValue = (isset($formData[0][$modelAlias][$fieldName]))?$formData[0][$modelAlias][$fieldName]:'';
                        ?>
                        <tr class="<?php echo $trClass;?>">
                            <td colspan="4" class="<?php echo $class;?>">
                                <div style="margin-top:3px;">
                                    <?php
                                    if(!empty($label))
                                    {
                                        if(isset($value['description']) && !empty($value['description']))
                                        {
                                            ?>
                                            <label style="color:#666666;text-align:left;width: auto;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span><a class="helpTooltip tooltip" href="javascript:void(0)" title="<?php echo $value['description'];?>">?</a></label>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <label style="color:#666666;text-align:left;width: auto;margin: 0 0 3px 0;white-space: normal;"><span class="elSelectable" data-el="person/edit:<?php echo $label;?>"><?php echo $label;?></span></label>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <input type="text" name="data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]" id="<?php echo $modelAlias.$idIndex;?>" size="30" autocomplete="off" value="<?=date('d-m-Y',strtotime($formValue));?>" placeholder="<?=$placeholder;?>" style="width:90%;margin-bottom:2px;" class="<?php echo $defaultInputClass;?> currentjobformbuilderdate" <?php echo ($disabled)?'disabled':'';?> <?php echo ($readonly)?'readonly':'';?>/>
                                    <?php
                                    if(!$disabled || !$readonly)
                                    {
                                        ?>
                                        <img class="calButton" src="<?=$this->webroot;?>js/calendar-datepicker/calendar-hover.gif" onclick="displayDatePicker('data[<?php echo $modelAlias;?>][<?php echo $fieldName;?>]', false, 'dmy', '-');"/>
                                        <?php
                                    }
                                    ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                }
            }
        }
    }
?>
<style type="text/css">
td {
	border: 1px solid black;
	padding: 10px;
	background: black;
	color: #FFF !important;
}
tr, label {
	color:#FFF !important;
}
textarea {
	width: 100%;
	height: 77px;
	padding: 10px;
}
</style>
<table style="width: 96%;border: 1px solid blueviolet;padding: 10px;margin: 2%;">
	<?php echo buildHtmlFormFromJson($formFieldJson); ?>
</table>
