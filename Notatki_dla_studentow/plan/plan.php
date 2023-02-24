<html>
	<head>
		<title>IwBiA</title>
		<meta charset="utf-8">
	</head>
	<body>
        <div>
    		<?php include("spis.php"); ?>
		</div>
        <br><br>
        <h1>PLAN</h1>
        <br><br>
        
        <h3>Legenda</h3>
        <font color="green">zielony</font> - wolne <br>
        <font color="aqua">morski</font> - zajęcia dydaktyczne <br>
        <font color="orange">pomaranczowy</font> - sesja egzaminacyjna <br>
        <font color="red">czerwony</font> - sesja poprawkowa <br>
        
        <br><br>

        Aktualna data: <?php echo date("Y-m-d"); ?>

        <br><br>
        
        <b>LUTY</b>
        <div id="luty" style="display:none">
            <table border="1">
                <tr bgcolor="gray">
                    <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th><th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
                </tr>
                <tr>
                	<td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td>
                </tr>
                <tr>
                    <td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
                </tr>
                <tr>
                    <td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
                </tr>
                <tr>
                    <td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td>
                </tr>
                <tr>
                    <td bgcolor="aqua">25</td><td bgcolor="aqua">26</td><td bgcolor="aqua">27</td><td bgcolor="aqua">28</td><td></td><td></td><td></td>
                </tr>
            </table>
        </div>
        <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('luty') .style.display=='none') {document.getElementById('luty') .style.display=''}else{document.getElementById('luty') .style.display='none'}">Pokaż</button>
	    <br><br>
        
        <b>MARZEC</b>
        <div id="marzec" style="display:none">
            <table border="1">
                <tr bgcolor="gray">
                    <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th><th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td bgcolor="aqua"><center>-- 1 --</center> <br> 16:45 - 18:15 Metody ilościowe ćwiczenia</td><td bgcolor="aqua">2</td><td bgcolor="aqua">3</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td>
                </tr>
            </table>
        </div>
        <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('marzec') .style.display=='none') {document.getElementById('marzec') .style.display=''}else{document.getElementById('marzec') .style.display='none'}">Pokaż</button>
        <br><br>
        
        <b>KWIECIEŃ</b>
        <div id="kwiecien" style="display:none">
            <table border="1">
                <tr bgcolor="gray">
                    <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th><th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
                </tr>
                <tr bgcolor="aqua">
                    <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>15</td><td>16</td><td>17</td><td>18</td><td bgcolor="green">19</td><td bgcolor="green">20</td><td bgcolor="green">21</td>
                </tr>
                <tr bgcolor="aqua">
                    <td bgcolor="green">22</td><td bgcolor="green">23</td><td bgcolor="green">24</td><td>25</td><td>26</td><td>27</td><td>28</td>
                </tr>
                <tr>
                    <td bgcolor="aqua">29</td><td bgcolor="aqua">30</td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </table>
        </div>
        <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('kwiecien') .style.display=='none') {document.getElementById('kwiecien') .style.display=''}else{document.getElementById('kwiecien') .style.display='none'}">Pokaż</button>
        <br><br>
        
        <b>MAJ</b>
        <div id="maj" style="display:none">
            <table border="1">
                <tr bgcolor="gray">
                    <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th><th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
                </tr>
                <tr>
                    <td></td><td></td><td bgcolor="aqua">1</td><td bgcolor="green">2</td><td bgcolor="aqua">3</td><td bgcolor="aqua">4</td><td bgcolor="aqua">5</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td>
                </tr>
                <tr>
                    <td bgcolor="aqua">27</td><td bgcolor="aqua">28</td><td bgcolor="aqua">29</td><td bgcolor="aqua">30</td><td bgcolor="aqua">31</td><td></td><td></td>
                </tr>
            </table>
        </div>
        <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('maj') .style.display=='none') {document.getElementById('maj') .style.display=''}else{document.getElementById('maj') .style.display='none'}">Pokaż</button>
        <br><br>
        
        <b>CZERWIEC</b>
        <div id="czerwiec" style="display:none">
            <table border="1">
                <tr bgcolor="gray">
                    <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th><th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td bgcolor="aqua">1</td><td bgcolor="aqua">2</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
                </tr>
                <tr bgcolor="aqua">
                    <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
                </tr>
                <tr bgcolor="aqua">
                    <td bgcolor="orange">17</td><td bgcolor="orange">18</td><td bgcolor="orange">19</td><td bgcolor="orange">20</td><td bgcolor="orange">21</td><td bgcolor="orange">22</td><td bgcolor="orange">23</td>
                </tr>
                <tr bgcolor="aqua">
                    <td bgcolor="orange">24</td><td bgcolor="orange">25</td><td bgcolor="orange">26</td><td bgcolor="orange">27</td><td bgcolor="orange">28</td><td bgcolor="orange">29</td><td bgcolor="orange">30</td>
                </tr>
            </table>
        </div>
        <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('czerwiec') .style.display=='none') {document.getElementById('czerwiec') .style.display=''}else{document.getElementById('czerwiec') .style.display='none'}">Pokaż</button>
        <br><br>
        
        <b>WRZESIEŃ</b>
        <div id="wrzesien" style="display:none">
            <table border="1">
                <tr bgcolor="gray">
                    <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th><th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td>1</td>
                </tr>
                <tr>
                    <td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
                </tr>
                <tr  bgcolor="red">
                    <td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td>
                </tr>
                <tr bgcolor="red">
                    <td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td>
                </tr>
                <tr>
                    <td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td>
                </tr>
                <tr>
                    <td>30</td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </table>
        </div>
        <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('wrzesien') .style.display=='none') {document.getElementById('wrzesien') .style.display=''}else{document.getElementById('wrzesien') .style.display='none'}">Pokaż</button>
        <br><br>
    </body>
</html>	