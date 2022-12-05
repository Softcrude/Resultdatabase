<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<head>
        <title>Print Page or Section of Page using JQuery : DevZone.co.in </title>
        <link rel="stylesheet" type="text/css" href="print.css" media="print">

        <style>
            .main { 
                width: 900px; 
                margin: auto; 
                height: 1150px;
                border: 1px solid #ccc;
                padding: 20px;
            }

            .header{
                height: 100px;    
            }
            .content{    
                height: 700px;
                border-top: 1px solid #ccc;
                padding-top: 15px;
				
            }
            .footer{
                height: 100px;  
                bottom: 0px;
            }
            .heading{
                color: #FF5B5B;
                margin: 10px 0;
                padding: 10px 0;
                font-family: trebuchet ms;
            }
            /*downloaded from http://devzone.co.in*/

            .print_div{


                border: 2px dashed #92AAB0;
                color: #92AAB0;
                display: table-cell;
                height: 750px;
                overflow-y: auto;
                padding: 10px 10px 10px 10px;
                text-align: justify;
                vertical-align: middle;
                width: 867px;
                float: left;
                margin-bottom: 20px;
				margin: 0 auto;

            }
            .classname {
                background: -moz-linear-gradient(center top , #3D94F6 5%, #1E62D0 100%) repeat scroll 0 0 #3D94F6;
                border: 1px solid #337FED;
                border-radius: 6px;
                box-shadow: 0 1px 0 0 #97C4FE inset;
                color: #FFFFFF;
                display: inline-block;
                font-size: 15px;
                font-style: normal;
                font-weight: normal;
                height: 27px;
                text-align: center;
                text-decoration: none;
                text-indent: 0;
                text-shadow: 1px 1px 0 #1570CD;
                width: 100px;
            }
			
        </style>
</head>

<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="jQuery.print.js"></script> 
            <script>
                $(document).ready(function() {
                    $(".print_div").find('button').on('click', function() {

                        var dv_id = $(this).parents(".print_div").attr('id');

                        //Print ele4 with custom options
                        $('#' + dv_id).print({
                            //Use Global styles
                            globalStyles: false,
                            //Add link with attrbute media=print
                            mediaPrint: false,
                            //Custom stylesheet
                            stylesheet: "http://fonts.googleapis.com/css?family=Inconsolata",
                            //Print in a hidden iframe
                            iframe: true,
                            //Don't print this
                            noPrintSelector: ".avoid-this"
                        });
                    });
                });
            </script>
            <div id='print-div3' class="print_div">
            <style type="text/css">
                            table.gridtable {
                                font-family: verdana,arial,sans-serif;
                                font-size:11px;
                                color:#333333;
                                border-width: 1px;
                                border-color: #666666;
                                border-collapse: collapse;
								a
                            }
                            table.gridtable th {
                                border-width: 1px;
                                padding: 8px;
                                border-style: solid;
                                border-color: #666666;
                                background-color: #dedede;
                            }
                            table.gridtable td {
                                border-width: 1px;
                                padding: 8px;
                                border-style: solid;
                                border-color: #666666;
                                background-color: #ffffff;
                            }
                        </style>

            
<table width="100%" border="1">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td><table width="100%" border="1">
          <tr>
            <td align="center"><img name="" src="images/logo.png" width="312" height="57" alt="" /></td>
          </tr>
          <tr>
            <td align="center"><strong>P.O Box 15, Owerrinta , Isiala Ngwa South L.G.A, Abia State</strong></td>
          </tr>
          <tr>
            <td><table width="100%" border="1">
              <tr>
                <td width="38%"><strong>Students Name: Okeke Okafor</strong></td>
                <td width="14%"><strong>Class: JSS1 A</strong></td>
                <td width="16%"><strong>Term: 3rd Term</strong></td>
                <td width="20%"><strong>Session: 2017/2018</strong></td>
                <td width="12%"><strong>Sex: Female</strong></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center"><strong>STUDENT REPORT CARD 1<sup>st</sup> TERM</strong></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" align="center">
          <tr>
            <td width="20%" align="center"><strong>SUBJECTS</strong></td>
            <td width="8%" align="center"><strong>CA</strong></td>
            <td width="9%" align="center"><strong>EXAM</strong></td>
            <td width="10%" align="center"><strong>TOTAL</strong></td>
            <td width="7%" align="center">&nbsp;</td>
            <td width="15%" align="center">&nbsp;</td>
            <td width="5%" align="center">&nbsp;</td>
            <td width="18%" align="center">&nbsp;</td>
            <td width="8%" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>English Language</strong></td>
            <td align="center"><strong>10</strong></td>
            <td align="center"><strong>56</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Mathematics</strong></td>
            <td align="center"><strong>34</strong></td>
            <td align="center"><strong>44</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>French</strong></td>
            <td align="center"><strong>22</strong></td>
            <td align="center"><strong>44</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Igbo Language</strong></td>
            <td align="center"><strong>32</strong></td>
            <td align="center"><strong>33</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Computer Studies</strong></td>
            <td align="center"><strong>12</strong></td>
            <td align="center"><strong>55</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Agric Science</strong></td>
            <td align="center"><strong>23</strong></td>
            <td align="center"><strong>54</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Fishery</strong></td>
            <td align="center"><strong>14</strong></td>
            <td align="center"><strong>44</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Basic Science</strong></td>
            <td align="center"><strong>26</strong></td>
            <td align="center"><strong>34</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Basic Tech</strong></td>
            <td align="center"><strong>35</strong></td>
            <td align="center"><strong>44</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Literature In English</strong></td>
            <td align="center"><strong>27</strong></td>
            <td align="center"><strong>56</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Physical Education</strong></td>
            <td align="center"><strong>26</strong></td>
            <td align="center"><strong>43</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Home Economics</strong></td>
            <td align="center"><strong>23</strong></td>
            <td align="center"><strong>34</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>C.R.S</strong></td>
            <td align="center"><strong>36</strong></td>
            <td align="center"><strong>34</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>TOTAL SCORE</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong>AVERAGE SCORE</strong></td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Social Studies</strong></td>
            <td align="center"><strong>35</strong></td>
            <td align="center"><strong>35</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em>565</em></strong></td>
            <td align="center">&nbsp;</td>
            <td align="center"><strong><em>45</em></strong></td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Business Studies</strong></td>
            <td align="center"><strong>33</strong></td>
            <td align="center"><strong>43</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Civic Education</strong></td>
            <td align="center"><strong>27</strong></td>
            <td align="center"><strong>52</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>C.C.A</strong></td>
            <td align="center"><strong>21</strong></td>
            <td align="center"><strong>22</strong></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<button class="print-link avoid-this"> Print Result</button>


</div>
</body>
</html>