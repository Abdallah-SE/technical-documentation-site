<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width, initial-scale=1">
        <title>Technical Documentation Page</title>
        <style>
        body {/*style for body*/
            margin: 0;
            padding: 0;
        }
        .container {/*Start the container*/
            display: flex;
            flex-flow: colum wrap;
            height: auto;
            width: auto;
            padding: 25px;
           
            align-items: flex-start ;
            overflow: visible;
            
        }/*End the container*/
        
        .container #navbar {/*Start the navbar*/
            display: block;
            padding-top: 60px;
            height: 100%;
            -webkit-overflow-scrolling: touch;
            background-color: #ffffff;
            box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            width:fit-content;
            height:fit-content;
            //overflow-x: no-content;
            overflow-y: auto;
             height: 100vh;
            top: 0; /* this is required for "sticky" to work */
            position: sticky;
            background: white;
            padding-bottom: 105px;
            border-top: 9px solid gold;
            border-left: 1px solid gold;
            border-radius: 7px;
            text-align: center;
            padding-right: 50px;
            padding-top: 10px;
           // text-overflow: ellipsis;
         }
        .container #navbar > header{
            text-align: center;
            font: 45px bold fantasy;
            background-color: white;
            color: black;
            height: auto;
            border-bottom: 9px solid gold;
            border-top: 9px solid gold;
            border-left: 9px solid gold;
            border-right: 9px solid gold;
            width: fit-content;
            margin-left: 15px;
            position: fixed;
            top: 0px;
            margin-right: 50px;
             //transform: translate(-50%, -50%);
        }
        .container #navbar .nav-list {
            display: flex;
            flex-flow: column wrap;
            text-align: left ;
            list-style: none;
            font: 30px bold fantasy; 
            list-style-type: none;
            padding: 25px;
        }
        .container #navbar .nav-list li {
            padding: 5px;
            display: block;
            width: 350px;
            color: black;
            border-bottom: 3px solid;
           
        }
        .container #navbar .nav-list li a {
            color: black;
            text-decoration: none;
            padding: 5px;
            margin: 5px;
        }
        .container #navbar .nav-list li a:hover {
            background-color: black;
            color: white;
            border-radius: 5px;
            border-right: 5px solid gold;
        }
        .container > #navbar > .nav-list > .active > a {
            background-color: black;
            color: white;
            border-radius: 5px;
            border-right: 5px solid gold;  
            //background-color: blue;
        }/*End the navbar*/

        .container #main-doc {/*Start the main-doc sec*/
            padding: 25px;
            width: 70%;
            position: relative;
            display: block;
            overflow: auto;
            
        }
        .container > #main-doc >  .main-section > header {
            padding-top: 15px;
            font: 40px bold fantasy;
            background-color: white;
            color: black;
            height: auto;
            border-right: 9px solid gold;
            border-radius: 7px;
             //transform: translate(-50%, -50%);
        }/*End the main-doc sec*/
        code {/**/
            display: block;
            background-color: #ebebe0;
            color: black;
            line-height: 110%; 
            //text-align-last: left;
            word-break: normal;
            //white-space: pre-wrap;
            overflow-y: scroll;
            border-left: 9px solid gold; 
            border-radius: 7px;
            height: 150px;
            
          }
        pre {
            display: block;
            font-family: monospace;
            white-space: pre;
            margin: 1em 10px;
            padding-right: 30px;
        }
        @media screen and (max-width: 600px) {
            .container {/*Start the container*/
                display: flex;
                flex-flow: row wrap;
            }
            .container > #navbar{
                position: relative;
                width: 100%;
                top: auto;
             }
             .container > #navbar > header {
                position: relative;
                width: 100%;
                top: auto;
             }
        }
        ::-webkit-scrollbar {
           width: 13px;
           font: 20px bold fantasy;
           
           
        }
        #navbar::-webkit-scrollbar{
            height: 4px;
            background-color: white;
            display: block;overflow: auto;
        }
        ::-webkit-scrollbar-thumb {
           background-color: black;
           border-radius: 7px;
        }
        @media screen and (max-width: 124%) {
            .container > #navbar{/*Start the container*/
                  
            }
        
        </style>
    </head>