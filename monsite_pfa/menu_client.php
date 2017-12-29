<ul>
        <style>
            ul {
                padding:0;
                margin:0;
                list-style-type:none;
            }
            li {
                margin-left:2px;
                float:left; /*pour IE*/
            }
            ul li a {
                display:block;
                float:left;
                width:100px;
                background-color:#6495ED;
                color:black;
                text-decoration:none;
                text-align:center;
                padding:5px;
                border:2px solid;
                /*pour avoir un effet "outset" avec IE :*/
                border-color:#DCDCDC #696969 #696969 #DCDCDC;
            }
            ul li a:hover {
                background-color:#D3D3D3;
                border-color:#696969 #DCDCDC #DCDCDC #696969;
            }
        </style>
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Item plus long</a></li>
    </ul>