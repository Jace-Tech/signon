<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telstra Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        :root {
            --dark: #555;
            --gray: #dadada;
            --blue: #1964c8;
            --light-blue: #00aaf3;
        }


        body {
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            max-width: 1024px;
            width: 100%;
            padding: 0 1rem;
            margin: 0 auto;
        }

        /* Top Header Styles */
        .top-header {
            background-color: var(--gray);
            overflow-x: auto;
        }
        @media screen and (max-width: 768px) {
            .top-header {
                display: none;
            }            
        }

        .top-menu {
            display: flex;
            list-style: none;
            white-space: nowrap;
        }

        .top-menu a {
            display: inline-block;
            color: var(--dark);
            padding: .75rem .6rem;
            font-size: .88rem;
            font-weight: normal;
            text-decoration: none;
        }

        .top-menu a:hover {
            color: #fff;
            background-color: var(--dark);
        }

        /* Header */
        header.header {
            padding: .2rem 0;
        }

        .mobile-header {
            display: none;
        }


        @media screen and (max-width: 768px) {
            header.header {
                display: none;
            }   
            
            .mobile-header {
                display: flex;
                padding: 1rem;
                justify-content: space-between;
            }           
        }

        .burger {
            cursor: pointer;
            display: flex;
            flex-direction: column;
            gap: .3rem;
            background-color: transparent;
            border: none;
        }

        .burger > span {
            width: 28px;
            height: 2px;
            background-color: var(--dark);
        }

        .v-divider {
            height: 30px;
            width: 1px;
            background-color: var(--gray);
            margin: 0 1rem;
        }

        a.m-logo {
            width: 40px;
            height: 30px;
            display: inline-block;
        }

        a.m-logo > img {
            width: 100%;
            object-fit: contain;
        }

        .mobile-nav {
            display: flex;
            align-items: center;

        }

        .btn-container {
            position: relative;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .btn-search {
            background-color: var(--light-blue);
            display: flex;
            padding: 1rem;
            min-width: 50px;
            align-items: center;
            justify-content: center;
            color: #fff;
            cursor: pointer;
            font-size: 1.2rem;
            border: none;
        }

        .btn-search:hover {
            background-color: var(--blue);
        }

        .btn-search.gray {
            background-color: var(--dark);
        }

        .btn-search.gray:hover {
            background-color: var(--dark);
        }

        form.form-search  {
            display: flex;
            position: absolute;
            right: 0;
            top: 0;
            border: 1px solid var(--gray);
            transform: translateX(120px);
            opacity: 0;
            pointer-events: none;
            max-width: 300px;
            transition: .5s ease-in-out;
            width: 100%;
        }

        form.form-search.active {
            transform: translateX(0px);
            opacity: 1;
            pointer-events: all;
        }

        form.form-search > .form-control {
            flex: 1;
            display: flex; 
            background-color: #fff;
        }

        form.form-search > .form-control::placeholder {
            font-weight: 800;
            color: #aaa;
        }

        form.form-search > .form-control:focus {
            box-shadow: 2px 2px 20px rgb(0, 170, 243, .2);
        }

        .nav-desktop {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: block;
            width: 110px;
        }

        .logo>img {
            width: 100%;
            object-fit: contain;
        }

        .search-form {
            display: flex;
            position: relative;
            flex-direction: column;
            background-color: var(--gray);
        }

        .form-label {
            font-weight: 800;
            color: #777;
            position: absolute;
            left: 30px;
            top: 0;
            font-size: .8rem;
        }

        .form-group {
            display: flex;
        }

        .form-control {
            display: flex;
            width: 100%;
            background: transparent;
            border: none;
            padding: .7rem;
            outline: none;
            color: var(--dark);
            font-size: .9rem;
        }

        .form-control::placeholder {
            font-weight: 700;
        }

        .search-btn {
            padding: .5rem;
            font-size: .9rem;
            color: var(--dark);
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .gradient {
            width: 100%;
            height: 100px;
            overflow: hidden;
            position: relative;
        }
        
        .gradient img {
            position: absolute;
            left: -500px;
        }
        
        @media screen and (max-width: 768px) {
            .gradient img {
                position: absolute;
                /* left: -130%; */
                left: -800px;
            }           
        }

        .title {
            font-size: 2.3rem;
            font-weight: 300;
        }

        .main {
            margin-top: 2rem;
        }

        @media screen and (max-width: 768px) {
            .main {
                margin-top: 1rem;
            }     
        }

        .paragraph {
            font-weight: 600;
            margin-top: 0.5rem;
        }

        .form-input {
            border: 1px solid #dadada;
            padding: .8rem 1rem;
            outline: none;
            display: flex;
            width: 100%;
            max-width: 350px;
            font-weight: 800;
            font-size: .9rem;
        }

        .form-input::placeholder {
            color: #777;
        }

        .row {
            display: flex;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        
        .part {
            flex: 1;
            padding: 1.5rem;
            border: 1px solid #dadada;
            min-width: 360px;
        }
        
        .part:first-of-type {
            padding-bottom: 0;
        }
        
        @media screen and (max-width: 768px) {
            .part:first-of-type {
                padding-bottom: .5rem;
                
            }
        }   

        .form-block {
            margin-bottom: .8rem;
        }

        .form-block>.info {
            margin-top: .8rem;
            display: none;
            font-size: .75rem;
        }

        .login-btn {
            border: none;
            display: flex;
            align-items: center;
            font-size: .85rem;
            font-weight: 600;
            padding: .9rem 1.2rem;
            text-transform: capitalize;
            cursor: pointer !important;
            margin-top: 1rem;
        }

        .login-btn.blue {
            color: #fff;
            background-color: var(--blue);
        }

        .login-btn.blue:hover {
            background-color: var(--light-blue);
        }

        .login-btn.gray {
            color: var(--dark);
            font-weight: 400;
            background-color: var(--gray);
        }

        .login-btn.gray:hover {
            background-color: var(--dark);
            color: #fff;
        }

        button.login-btn .btn-name {
            margin-right: .5rem;
            display: inline-block;
        }

        .form-table {
            margin-top: 1rem;
            margin-bottom: 4rem;
        }

        .divider {
            margin: 2rem 0;
            height: 2px;
            width: 100%;
            background-color: var(--gray);
        }

        .alt-text {
            color: var(--blue);
            font-size: .9rem;
        }

        .gray-text {
            text-decoration: underline;
            color: var(--dark);
            font-size: 0.85rem;
            margin-top: 1rem;
        }

        .blue-title {
            font-weight: 200;
            font-size: 1.5rem;
            color: var(--blue);
            margin-top: 3rem;
        }

        .items {
            margin-top: 1rem;
            list-style: none;
        }

        .items li {
            display: flex;
            font-size: .85rem;
            margin-bottom: .8rem;
            align-items: flex-start;
        }

        .items li:not(:last-of-type) {
            align-items: center;
        }

        .items img {
            height: 32px;
            object-fit: contain;
            margin-right: .3rem;
        }

        .down {
            display: block;
            margin-top: 0.8rem;
        }

        .highlighted {
            text-decoration: underline;
            text-underline-offset: 3px;
            text-decoration-color: #ccc;
        }

        .first-text {
            font-size: .9rem;
            line-height: 1.6;
        }

        .texts {
            margin: .6rem 0;
            padding-left: 1rem;
            line-height: 1.6;
            font-size: .85rem;
        }

        .texts li {
            margin-bottom: 0.3rem;
        }

        .icons {
            list-style: none;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        @media screen and (max-width: 582px){
            .icons {
                width: 120px;
            }
        }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: .3rem;
            background-color: var(--light-blue);
        }

        .icon > * {
            fill: #fff;
        }

        footer {
            padding: 2rem 0;
            background-color: #f4f4f4;
            min-height: 150px;
        }

        .flex {
            display: flex;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        @media screen and (max-width: 582px){
           
        }

        .flex-item {
            flex: 1;
            min-width: 200px;
            margin-bottom: 1.5rem;
        }

        .links {
            list-style: none;
        }

        .links li {
            margin-bottom: 0.4rem;
        }

        .links a {
            color: #333;
            font-size: .8rem;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .back-top {
            padding: 2rem;
            display: none;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gray);
        }

        @media screen and (max-width: 768px) {
            .back-top {
                display: flex;
            }
        }

        .back-top > a {
            font-size: 1rem;
            text-decoration: none;
            font-weight: 700;
            color: #aaa;
        }

    </style>
</head>

<body>
    <section class="top-header">
        <div class="container">
            <ul class="top-menu">
                <li>
                    <a href="#">Telstra.com</a>
                </li>
                <li>
                    <a href="#">Personal</a>
                </li>
                <li>
                    <a href="#">Small Business</a>
                </li>
                <li>
                    <a href="#">Business & Enterprise</a>
                </li>
                <li>
                    <a href="#">Health</a>
                </li>
                <li>
                    <a href="#">Sport & Entertainment</a>
                </li>
            </ul>
        </div>
    </section>

    <header class="header">
        <div class="container">
            <nav class="nav-desktop">
                <a href="#" class="logo">
                    <img src="data:image/png;base64,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" alt="">
                </a>

                <form action="" class="search-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Telstra.com">
                        <button class="search-btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </nav>
        </div>
    </header>

    <header class="mobile-header">
        <div class="mobile-nav">
            <button class="burger">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="v-divider"></div>

            <a href="" class="m-logo">
                <img src="data:image/png;base64,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" alt="">
            </a>
        </div>

        <div class="btn-container">
            <button class="btn-search">
                <i class="fa fa-search"></i>
            </button>

            <form action="" class="form-search">
                <input type="text" class="form-control" placeholder="Search Telstra.com">
                
                <button class="btn-search">
                    <i class="fa fa-search"></i>
                </button>

                <button class="btn-search gray" id="form-cancel">
                    <i class="fa fa-times"></i>
                </button>
            </form>
        </div>
    </header>

    <section class="gradient">
        <div class="container">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAACgAAAALECAYAAADEwmkdAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpCQjBDNDEyNkMxMjA2ODExODIyQUVDMDVCQ0VGODExRSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxMzU1Qzg0ODM3OEIxMUU2OEE5Q0E2M0U3MEU0RDMyNyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxMzU1Qzg0NzM3OEIxMUU2OEE5Q0E2M0U3MEU0RDMyNyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTQwRUI0OTI2MjIwNjgxMThDMTRBODY0M0NGOENCNUQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QkIwQzQxMjZDMTIwNjgxMTgyMkFFQzA1QkNFRjgxMUUiLz4gPC9yZGY6RGVzY3Jp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CRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAAAAAAAAgAkSAAQAAAAAAAAAAIAJEgAEAAAAAAAAAACACRIABAAAAPj/2bUDEgAAAABB/1+3I9AdAgAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQwIgAAAAAAAAAAAADAmAAAAAAAAAAAAAMCQAAgAAAAAAAAAAwJAACAAAAAAAAAAAAEMCIAAAAAAAAAAAAAwJgAAAAAAAAAAAADAkAAIAAAAAAAAAAMCQAAgAAAAAAAAAAABDAiAAAAAAAAAAAAAMCYAAAAAAAAAAAAAwJAACAAAAAAAAAADAkAAIAAAAAAAAAAAAQ7FrByQAAAAAgv6/bkegOxQAAQAAAAAAAAAAYEgABAAAAAAAAAAAgCEBEAAAAAAAAAAAAIYEQAAAAAAAAAAAABgSAAEAAAAAAAAAAGBIAAQAAAAAAAAAAIAhARAAAAAAAAAAAACGBEAAAAAAAAAAAAAYEgABAAAAAAAAAABgSAAEAAAAAAAAAACAIQEQAAAAAAAAAAAAhgRAAAAAAAAAAAAAGBIAAQAAAAAAAAAAYEgABAAAAAAAAAAAgCEBEAAAAAAAAAAAAIYEQAAAAAAAAAAAABgSAAEAAAAAAAAAAGBIAAQAAAAAAAAAAIAhARAAAAAAAAAAAACGBEAAAAAAAAAAAAAYEgABAAAAAAAAAABgSAAEAAAAAAAAAACAIQEQAAAAAAAAAAAAhgRAAAAAAAAAAAAAGBIAAQAAAAAAAAAAYEgABAAAAAAAAAAAgCEBEAAAAAAAAAAAAIYEQAAAAAAAAAAAABgSAAEAAAAAAAAAAGBIAAQAAAAAAAAAAIAhARAAAAAAAAAAAACGBEAAAAAAAAAAAAAYEgABAAAAAAAAAABgSAAEAAAAAAAAAACAIQEQAAAAAAAAAAAAhgRAAAAAAAAAAAAAGBIAAQAAAAAAAAAAYEgABAAAAAAAAAAAgCEBEAAAAAAAAAAAAIYEQAAAAAAAAAAAABhKAAEGAIa6CeFXW4CoAAAAAElFTkSuQmCC" alt="">
        </div>
    </section>

    <main class="main">
        <section>
            <div class="container">
                <h2 class="title">Log in</h2>
                <p class="paragraph">Telstra is making changes to the way you sign in to help protect your account.</p>
            </div>
        </section>

        <section class="form-table">
            <div class="container">
                <div class="row">
                    <div class="part">
                        <form action="./login.php" method="get">
                            <div class="form-block">
                                <input type="text" class="form-input" name="user_id" placeholder="Username" id="input" />
                                <small class="info">As a customer, this is the name you registered with us.</small>
                            </div>

                            <div class="form-block">
                                <input type="text" class="form-input" placeholder="Password" />
                            </div>

                            <button class="login-btn blue">
                                <span class="btn-name">Log in</span>
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </form>

                        <div class="divider"></div>

                        <h3 class="alt-text">Or use your Digital Certificate</h3>

                        <button class="login-btn gray">
                            <span class="btn-name">Login in with Digital Certificate</span>
                            <i class="fa fa-chevron-right"></i>
                        </button>

                        <p class="gray-text">Replace your Digital Certificate</p>

                        <h2 class="blue-title">Reasons To Register Online</h2>
                        <ul class="items">
                            <li>
                                <img class="item-img" src="data:image/png;base64,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" alt="">
                                <span>Monitor your calls and data usage</span>
                            </li>
                            <li>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADdYAAA3WAZBveZwAAAAHdElNRQffBBEBNRZlvo+wAAAAGHRFWHRTb2Z0d2FyZQBwYWludC5uZXQgNC4wLjVlhTJlAAACh0lEQVRoQ+2YS2sUURCFJ5oESYgibkJ8P7LTVUAJxAdiFBcxCiq40U18IFEwMAsXyV/Xc1P3ttVnajrTle5y0x8cMlN1+tY9TPekp0cDAwNTuTsej/9ECfN2ZWw3fLaGRAiz52ULfrashSOV9+FjyoLvetSeMW8Z8kELfZRq7yzT3C0pO6CFNqTaPzR3R6oOaKGmAOegNehWF6K5e7l+CZqDZocWsgKsak+EMPM7NFsQOpAD3ND9aGH+WdlGA3RALYDu/Q9hCz9lJw3QATrAVd3L/SvQxR61Ycxshsw6wDb12l1cfl7Q3PNSngKZdYAd6kVR+xTwPn3zTYfMngBnoGvyshNiA6j+D6mYpNPvCcS3FY8hPjVDA8zP4KnNsJRthbAAz3Vf+W5K+x+WTyvbCiEBbuseC/0VsVWsW74k9O6IpSIkwIGqv4WuQ7uq9gryEhLg0Kqr2qZUXIQEeE+9BSmPlqBVeekmJMCC7uX+trSmsg6l9bX4/E+EBEgs6b7ypU+hhuUrQvtIXBVhAQoPtc/ycp+VbYWQAIvQ0/w3sUjee1Ku2NR9LfQeiKWi/wAn1fHyl1RchAco9zJzqnYgJRchp1DtSR7ef6P3L49dPk4VIN0dFhqvAd1joW/9lr0A8dOJ9BSC8QfIB1yWTmOAxIruZ88hVC5szVf2amVPoV0AMPGoz1L2TtDWYynbCq0DVBdfk7LX4vi3M/5a/1ULz3i9IvTSzaCmdYBE+lm4rw9kiS0EV4BCClIecXyghaI4VQDNSRdxX3QW4BEt5H+G345PNHfi5nBWrK/JfehLX+J5eaYfa8FIYQtvZCd+ao9NIoXZv2UL3fDaGtKXMO++jB0YGKgzGv0FsxeaK2hES6YAAAAASUVORK5CYII=" alt="">
                                <span>View and pay your bills</span>
                            </li>
                            <li>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wUFAgswFitGEQAACUZJREFUWMO9mdtPXFUbxn977cMMdGBGOrZYRodaMGSgYRKSCsYYY2LU6oXGalKtMcZE7/1PmmhSLmmkxLv2Qo1GLzTloiUxqNXqoJ1UEIFycKDOsA9rr++Cby33DLTV77OuhDCHvfZ+3sPzvO+7xlJKKW6zlFJYlsWdVvI6fcu99kkpEUJgWRZxHCOEuO19xZ0ebFkWSiniON4F6FZGtAKTUpr9tm3f8ro9n/93PRgEAUIIHMfZda0GcSuvSCl3gfxHACZv3ArWcZxbAlJKEYYhnuftMkRH5k4hviPAvbwkpcRxHPOQ1pBbltVkSBzHRFF0W2P+5xwMw3AXQNd1sSyLMAwNkDiOm/6S+4UQeJ5HHMcEQYCUcs+8/r88mMxFKSULCwtUKhXm5ubY3NykVqvh+z6WZZFKpcjlcmSzWQYGBujt7aVQKPyt3PtbORjHMbZts7W1xeXLl5mZmWF1dRUAx3GMl3WuRVEEgOu6Jn97enoYGxujXC7juu4dCbUnQCkllmUhhEBKaSyO45hLly7x4YcfmpDpEAshyOfzZLNZUqkUcRzTaDSo1Wqsr683aWIqlcJ1XU6ePEl/f/+eWqiUMnuEEDsAdQJrUPV6nfb2dgBqtRqTk5Ncv369CfiDDz7I2NgYfX19OI6zS3aCIMD3fSqVCrOzs1y9epU4jkmn0wRBwOjoKM8++yxtbW1NztARcBxnh+2tIW40GrS1tQFQrVaZnJxkbW2NdDoNQLlc5vjx43R0dJiqkBR0LR06hEopbNtmeXmZCxcuUK1WjQp0d3dz6tQpurq6TAQ1UA3SiuNYWZbF9vY2qVQKy7IMCSYmJmg0Gti2TTab5aWXXqK3txff97FtmyiKOHfuHL/++isjIyMcP34cKSXnz5/nypUr9Pf3c/LkSaIownVdgiBgbm6O8+fPs7a2hhCCQ4cOcerUKQ4cOEAURdi2bXI+jmOEZVlEUYTnecYLa2trTE5OsrGxge/7FAoF3nnnHYrFoiGA1sGlpSU2NzcNGbSBW1tbLC0tNZHF8zwGBwd566236O7uxnVdFhYWmJqaol6vm0KgjRdC7HgwWRcbjQZnzpxhcXERx3EYHh7mxIkTCCGo1Wq89957PPnkk4yMjOA4DtevXzeSkly1Wo1arcYDDzxgQv3NN98wPDxsQnj69GlWVlZQSnH06FFee+01k79aEYQGFgQBSik+++wzFhcXCcOQYrHI888/byrA+Pg4m5ubzMzMGAYWi0UDLtkUZLNZCoWC8ezXX3/NxsaGUQXHcXjzzTfJZDIopbh69SqXLl2i0Wg0lUah66LneSwtLXHx4kUA8vk8L7/8siGHlJITJ04wNjbG22+/jW3bCCGaSpz+LKlxtm3zww8/8MEHHzA0NNRUf3O5HK+88gqe57G9vc0nn3zSxOb/XitMff34449NHj3zzDPkcjmklARBgG3b9Pb28sILLzTpo/bQrdaPP/7I1NQUhUKBfD5vDJJSIqWkWCwyNjaGUoqbN28yPT1NEAQGh9CV4vfff6dSqRBFET09PQwODiKE4MKFC0xMTLC8vGws13qYbLt0NdHJrWXq3Llz1Ot1jh07Zr775ZdfePfdd7l48SKO4/DYY49xzz33oJTi008/bY6CZuRXX31laP7444+TTqdZXV3l8uXLVKtVEz7tsWSxTzYNjuOglOK3335jYmKCra0tXNfl6NGjxhjP86hWq3z++efU63U6OzsZHh6mra3NiLv2tKOlZXp6Gsdx8DyPgYEB4+KhoSG6urqMmGpyaCAarOu6APi+j+/7jI+P88cff2DbNuVymVQqZcS3q6uLRx991BislOLYsWN88cUXpFIppqenKZVKO9dr3dve3sZxHEqlknnY/v37efXVV004tdLrGqzraLJJCIKA06dPm2uUUpTLZSzLMo2F53m8+OKLTT1jd3c3PT09bGxsMD8/b6qNiOOYhYUFpJTU63X6+vqaire+cZIM2gDbto0XwzAkDEPOnDlDo9HA932CICCTyXDkyBFDNr23tYmyLIu+vj5832dra4vFxcWdHNR1Uid8oVAwujU1NcVPP/1k6qlt2waoZnAyocfHx7lx44Ypj6lUitHRUbNfe1pLzffff8/777/Pzz//bLwohKC9vZ3Nzc2dKAAsLy8bL+mauLKyYvo+XatbvaZfSykZHx9nfn4ex3FMvyelZGhoyOSrlg8t6PPz88zOznLjxg2UUgag7/usrKzguu4OQCklvu+TTqebZtZMJsO9995LGIak0+mm3k57LYoizp49y7Vr10x+6ppaKBQ4dOiQ2eN5nsmtOI7JZrO0t7ebTtx1XaMIWiWcVtnQdfCpp57iiSeeaGKo7jKSo+P6+jqVSsV0QmEY4roujUaDRx55xIwK+n9SBUZGRhgdHTVe7ejoQClFJpOhVqshhNjJwTAMzQN0nujhSL/X3Xbr4H7w4EE6OzvNiBmGoSFHqVQye3QXJIQgiqImw7XBN2/exLZtNjY26Ojo+FOoc7kcvu/TaDSMVCSZrD2X/Ey/llIyODhoQud5HkEQMDg4SDqdbprctFFJo5PfNRoNhBC4rkt7e/sOmeI4JpfLGZbNzc3tGrSTwKIoanqobds89NBDhgSe53HgwAGGh4dN06mlSfeKOhpJklmWxbVr14wyZLNZlFI4QgjTFrW1tTEzM0OxWDQWtIZVCGEA6+8PHz7MG2+8wf79+8nn803zSeuskiSYfq8nxitXrphnaD12lFKUSiXy+Tyrq6t899137Nu3j6effpp9+/aZ+pwEmJy+LMsinU4zMDBgFKD1WCSKIgMkaaCuRNVqlY8++oilpSWklJTLZaOvVhRFyrZtKpUKZ8+eNZTPZDIcPnwYz/NMqDQgnTtaNpIDk5QS13XNHJIcrJJE0febn59nfX3dHI/cd999vP766xw8eHD3XPztt9+agaazs9N0IndzKaVMjT5y5AjPPfcc999//5+yJKVUSRKsrq7y5ZdfMjs7i+/73O0lpaRUKvHwww/T39/fJHOWZf05dianNYDt7W1D/bu5urq6mubhIAhMVTGDe5Ktumf7t5bOxb0ONuM43gmxBtd6ptd6zne3QrwXsKazmVsd7/7VA/R/gih7nWGbEOsC32rVXzmF/yfAJZ2gRwDtJEOS2/108G+s1gN2jec/hgUcCmUTbmwAAAAASUVORK5CYII=" alt="">
                                <span>Manage your Telstra services</span>
                            </li>

                            <li>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADdYAAA3WAZBveZwAAAAHdElNRQffBBEBNCpTysJ2AAAAGHRFWHRTb2Z0d2FyZQBwYWludC5uZXQgNC4wLjVlhTJlAAAC5klEQVRoQ+2Zy2sUQRDGNzExIZCDj/jIxYuCEIVEheADUdAYPAjqIYr4ICZCEIw5LEYw/utaNVUz9NZUV1f3PsLA/uCD2ar6amY3k96a3t6UKVNGwgxoA/Sz3+//swQ1h6B19pw6F0B/tQv1CLwnoPPYaNIsahdUKuiHb2Sx6jwBHmoXIQV1eFEHrBOtRgrq7oPGypF2YhTk9kCe22EFtK/1QEHuR1U1arSToSD1gCqKeKn1RHF+ZPxRToC3yFyV1VniOryFLOZlb/b9pvTwfFCaP6eUyU5Q76GpD3w7lCrnhtLUe8s0/y9wvEahJC/Cc7H3OqUKUJq9oUyUWdCh9NWC3DHoDBYavFd8RbzObSTrY+LyKEr9K8r4mVGaLFAqylfpiQlqt8gSZVnxZI0eT4X5I4WjzIl6nItCtA8kxYGof0xhB6GRzfOUiXJT1GtsOGpCWuMKx5PMFhibi4Pj6Lof1DyjiE1dH/hct5H8pDYpbLIqPKMalZ+IvrcpbLMrTNa3bUPoYd9VygzFguj5mcIGoYFNXu4p3l+gpSpbiNLTJtswyJb0c49dUNFtpfSyyTa0uSZ71ILcKpX4UXrYZBviqKMyxLPehOK3yTbY4Gz0bpie2d5sg48V0dM7nRZdj1xGz1LYpHkogePYzHRF9PWQv4wC68L0iMIma0H9XQq1EX09yC+yWxS2KRklmpUHjj9RqE1mT+328S3FijE1Sg9Mm/B6mcIDNM8XcIy7cymKhzlE/un2KWzS2qGDGA52x0r8EhoSlI/TSGjmBucoE6XahUgJ6r5RucnAqsW+bLIfKYHL0hMK8t+pzEbxZT9SViiNXMsY0KxK7PsC8m7i7oVe9hejbauknmdrms0wfu1hOzwXe8u3VRhtY+stpUzuBPUexrKxVdPaWuQTuB52Eox9a7FCOwkKUttUUcTENndrUtvrF6sqm9PZXg/o9A8cNZ3+iSmksz/ySXBK7OTPrFOmdJte7z+Dk+xjJ5+VEQAAAABJRU5ErkJggg==" alt="">
                                <span>Order products and services online</span>
                            </li>
                            <li>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAjVBMVEX///94eHizs7OOjo76+vp8fHzi4uLFxcXn5+fr6+vb29vQ0NCurq7z8/PX19e9vb38/PzIyMi5ubmrq6ugoKCZmZmJiYmEhIT29vbOzs6cnJyTk5OQkJCHh4eDg4OBgYF+fn7Z2dnU1NS2traoqKikpKTk5OTg4ODHx8fBwcG/v7/t7e2VlZWUlJSIiIgLmha6AAABtklEQVQ4y9WU2XqqMBSFsyABBASqDFVEQHGoHd7/8U7mY4nt15te9L+AZGdl2nsB+Vss05rBZTHXPXd4BCvmwhXwnnozOvhkTok9cahxcmIfqJwYBVYPYm9PklEcOJR4wGYuPMNw5L0MmuF5LkygUGvcoNhd3CwGEg+IeG8CizhiuU14r/JqxvxyFZAUEInbYaeHDrxlyQZo6kYljmHSY0esrW7BgN2UVqo0JxEBbnpwixcrXANX2XjNfSCX+yHjr7jb74Hmo9EZ9lHd3f3AX7nywhoaT4325hhWcQITvehyCbEPgnNhVtwa4YRBRqwXQjsm5/eUmDlv/FnI+kjWvGHZ2IoWTJ4i+n8ur7wzLh3g81MoRaiuxCDT4nr2Zi4dq76oQebarsEQ6RlL7eED0PO2ax2fKoVN7IsokkMKlFQ43x/HMQFSWTyM7uYtUFEKQ6YsUBGHpQ+0xtcsN9tErvK1BvqnWBBo+0fCIS7LliuTT6FO1M+FlgCm+49pq9ztEjKgz6ntt2jJYxbvAJpclzeG8Z9Lce3AaY/XbJMCCMiX0LCBZUW+JU6Vtk5+8FMNksOZ/C7/AMFKFtvUjzaMAAAAAElFTkSuQmCC" alt="">
                                <div class="">
                                    <span> Enjoy exciting membership benefits with Telstra Plus</span>

                                    <span class="down">(excludes Enterprise customers)</span>
                                </div>
                            </li>
                        </ul>

                        <button class="login-btn gray">
                            <span class="btn-name">Register now</span>
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>

                    <div class="part">
                        <p class="first-text">
                            <strong class="highlighted"> If you are an Enterprise customer </strong>
                            We have changed the process by which you can pay by credit card.
                        </p>

                        <ul class="texts">
                            <li>If you are an existing customer and are already registered, please login.</li>
                            <li>If you would like to register, click here for further information or contact your service team or representative.</li>
                        </ul>

                        <p class="first-text">
                            If you don't feel comfortable signing in to pay your bill, we do have other options available to you, including:
                        </p>

                        <ol class="texts">
                            <li>You can call <strong>1300 369 666</strong> and follow the prompts. You just need your Telstra account number before your call, and can pay by cheque, savings or debit account.</li>
                            <li>You can pay by BPAY by using your Biller Code, and Bill reference number, which can be found at the bottom of your bill.</li>
                            <li>You can setup Direct Debit and remove the need to pay manually every month.</li>
                            <li>You can visit your local Telstra Store or post Office to make payments. Fees may apply.</li>
                        </ol>

                    </div>
                </div>
            </div>
        </section>

        <section class="back-top">
            <a href="#">Back to top <i class="fa fa-chevron-up"></i></a>
        </section>

        <footer>
            <div class="container">
                <div class="flex">
                    <div class="flex-item">
                        <ul class="icons">
                            <li>
                                <a href="" class="icon">
                                   <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="20px" height="20px">    <path d="M12,27V15H8v-4h4V8.852C12,4.785,13.981,3,17.361,3c1.619,0,2.475,0.12,2.88,0.175V7h-2.305C16.501,7,16,7.757,16,9.291V11 h4.205l-0.571,4H16v12H12z"/></svg>
                                </a>
                            </li>

                            <li>
                                <a href="" class="icon">
                                   <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="20px" height="20px">    <path d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z"/></svg>
                                </a>
                            </li>

                            <li>
                                <a href="" class="icon">
                                   <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="20px" height="20px">    <path d="M 7.4140625 3 L 9.1894531 9.4121094 L 9.1894531 12.488281 L 10.726562 12.488281 L 10.726562 9.4121094 L 12.525391 3 L 10.976562 3 L 10.332031 5.9179688 C 10.151031 6.7699687 10.035422 7.3753281 9.9824219 7.7363281 L 9.9355469 7.7363281 C 9.8605469 7.2313281 9.7439375 6.62125 9.5859375 5.90625 L 8.9648438 3 L 7.4140625 3 z M 14.318359 5.4199219 C 13.797359 5.4199219 13.376641 5.5224687 13.056641 5.7304688 C 12.735641 5.9374688 12.500609 6.2687031 12.349609 6.7207031 C 12.199609 7.1737031 12.123047 7.7715781 12.123047 8.5175781 L 12.123047 9.5234375 C 12.123047 10.261437 12.190266 10.853828 12.322266 11.298828 C 12.454266 11.743828 12.675281 12.072203 12.988281 12.283203 C 13.301281 12.494203 13.733203 12.600562 14.283203 12.601562 C 14.818203 12.601562 15.244641 12.497063 15.556641 12.289062 C 15.868641 12.081063 16.095375 11.755641 16.234375 11.306641 C 16.373375 10.857641 16.443359 10.264391 16.443359 9.5253906 L 16.443359 8.5175781 C 16.443359 7.7715781 16.371516 7.1755625 16.228516 6.7265625 C 16.085516 6.2785625 15.860781 5.9473281 15.550781 5.7363281 C 15.241781 5.5253281 14.830359 5.4199219 14.318359 5.4199219 z M 17.251953 5.5566406 L 17.251953 10.734375 C 17.251953 11.375375 17.362078 11.847437 17.580078 12.148438 C 17.799078 12.449437 18.137656 12.599609 18.597656 12.599609 C 19.260656 12.599609 19.758844 12.279672 20.089844 11.638672 L 20.123047 11.638672 L 20.259766 12.486328 L 21.480469 12.486328 L 21.480469 5.5566406 L 19.921875 5.5566406 L 19.921875 11.060547 C 19.861875 11.189547 19.769531 11.295906 19.644531 11.378906 C 19.519531 11.462906 19.389906 11.503906 19.253906 11.503906 C 19.094906 11.503906 18.982063 11.436687 18.914062 11.304688 C 18.846063 11.172688 18.8125 10.954531 18.8125 10.644531 L 18.8125 5.5566406 L 17.251953 5.5566406 z M 14.283203 6.4941406 C 14.501203 6.4941406 14.656187 6.6098437 14.742188 6.8398438 C 14.829188 7.0688437 14.871094 7.4316875 14.871094 7.9296875 L 14.871094 10.089844 C 14.871094 10.602844 14.828188 10.971266 14.742188 11.197266 C 14.656188 11.423266 14.502156 11.536109 14.285156 11.537109 C 14.067156 11.537109 13.915031 11.423266 13.832031 11.197266 C 13.748031 10.971266 13.707031 10.601844 13.707031 10.089844 L 13.707031 7.9296875 C 13.707031 7.4326875 13.751891 7.0698438 13.837891 6.8398438 C 13.923891 6.6108438 14.072203 6.4941406 14.283203 6.4941406 z M 6.5 13.900391 C 5.119 13.900391 4 15.019391 4 16.400391 L 4 24.400391 C 4 25.781391 5.119 26.900391 6.5 26.900391 L 23.5 26.900391 C 24.881 26.900391 26 25.781391 26 24.400391 L 26 16.400391 C 26 15.019391 24.881 13.900391 23.5 13.900391 L 6.5 13.900391 z M 15.058594 16.199219 L 16.328125 16.199219 L 16.328125 19.283203 L 16.337891 19.283203 C 16.451891 19.060203 16.614219 18.881141 16.824219 18.744141 C 17.034219 18.607141 17.261906 18.539062 17.503906 18.539062 C 17.815906 18.539062 18.059328 18.622109 18.236328 18.787109 C 18.413328 18.952109 18.544047 19.220844 18.623047 19.589844 C 18.702047 19.959844 18.742188 20.471953 18.742188 21.126953 L 18.742188 22.050781 C 18.742188 22.922781 18.637734 23.563609 18.427734 23.974609 C 18.217734 24.385609 17.888359 24.591797 17.443359 24.591797 C 17.195359 24.591797 16.969625 24.533922 16.765625 24.419922 C 16.561625 24.305922 16.410594 24.149172 16.308594 23.951172 L 16.279297 23.951172 L 16.146484 24.503906 L 15.058594 24.503906 L 15.058594 16.199219 z M 7.1835938 16.496094 L 11.087891 16.496094 L 11.087891 17.556641 L 9.7792969 17.556641 L 9.7792969 24.503906 L 8.4902344 24.503906 L 8.4902344 17.556641 L 7.1835938 17.556641 L 7.1835938 16.496094 z M 21.117188 18.542969 C 21.568188 18.542969 21.916203 18.624062 22.158203 18.789062 C 22.399203 18.955063 22.570922 19.2135 22.669922 19.5625 C 22.767922 19.9125 22.816406 20.396672 22.816406 21.013672 L 22.816406 22.017578 L 20.613281 22.017578 L 20.613281 22.314453 C 20.613281 22.690453 20.623484 22.971203 20.646484 23.158203 C 20.669484 23.345203 20.715156 23.483359 20.785156 23.568359 C 20.855156 23.654359 20.963375 23.697266 21.109375 23.697266 C 21.306375 23.697266 21.441625 23.62075 21.515625 23.46875 C 21.588625 23.31675 21.628766 23.061078 21.634766 22.705078 L 22.769531 22.771484 C 22.775531 22.821484 22.779297 22.893422 22.779297 22.982422 C 22.779297 23.523422 22.631937 23.927359 22.335938 24.193359 C 22.039938 24.461359 21.621078 24.595703 21.080078 24.595703 C 20.431078 24.595703 19.976844 24.391375 19.714844 23.984375 C 19.452844 23.577375 19.324219 22.94675 19.324219 22.09375 L 19.324219 21.072266 C 19.324219 20.194266 19.460469 19.553438 19.730469 19.148438 C 20.000469 18.743437 20.462188 18.542969 21.117188 18.542969 z M 12.949219 18.650391 L 14.267578 18.650391 L 14.267578 24.501953 L 14.263672 24.501953 L 14.263672 24.503906 L 13.232422 24.503906 L 13.119141 23.787109 L 13.089844 23.787109 C 12.809844 24.329109 12.390078 24.599609 11.830078 24.599609 C 11.441078 24.599609 11.155703 24.47375 10.970703 24.21875 C 10.785703 23.96475 10.693359 23.565391 10.693359 23.025391 L 10.693359 18.652344 L 12.013672 18.652344 L 12.013672 22.949219 C 12.013672 23.209219 12.042609 23.397813 12.099609 23.507812 C 12.157609 23.619812 12.251719 23.673828 12.386719 23.673828 C 12.500719 23.673828 12.609844 23.639359 12.714844 23.568359 C 12.820844 23.498359 12.897219 23.408781 12.949219 23.300781 L 12.949219 18.650391 z M 21.089844 19.431641 C 20.949844 19.431641 20.844344 19.472687 20.777344 19.554688 C 20.710344 19.637687 20.665531 19.772938 20.644531 19.960938 C 20.621531 20.147938 20.611328 20.433453 20.611328 20.814453 L 20.611328 21.234375 L 21.574219 21.234375 L 21.574219 20.814453 C 21.574219 20.438453 21.562109 20.154937 21.537109 19.960938 C 21.512109 19.765937 21.467391 19.630781 21.400391 19.550781 C 21.333391 19.471781 21.230844 19.431641 21.089844 19.431641 z M 16.910156 19.474609 C 16.783156 19.474609 16.664641 19.524953 16.556641 19.626953 C 16.448641 19.728953 16.372125 19.859578 16.328125 20.017578 L 16.328125 23.339844 C 16.386125 23.441844 16.460734 23.517359 16.552734 23.568359 C 16.644734 23.618359 16.744516 23.646484 16.853516 23.646484 C 16.993516 23.646484 17.1045 23.596141 17.1875 23.494141 C 17.2705 23.392141 17.329281 23.220516 17.363281 22.978516 C 17.398281 22.737516 17.416016 22.402562 17.416016 21.976562 L 17.416016 21.222656 C 17.416016 20.764656 17.402047 20.411109 17.373047 20.162109 C 17.345047 19.914109 17.292703 19.736812 17.220703 19.632812 C 17.147703 19.528813 17.045156 19.474609 16.910156 19.474609 z"/></svg>
                                </a>
                            </li>

                            <li>
                                <a href="" class="icon">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="20px" height="20px"><path d="M 17.1875 10.9375 C 9.421875 10.9375 3.125 17.234375 3.125 25 C 3.125 32.765625 9.421875 39.0625 17.1875 39.0625 C 24.953125 39.0625 31.25 32.765625 31.25 25 C 31.25 24.035156 31.144531 23.09375 30.960938 22.1875 L 30.882813 21.875 L 17.1875 21.875 L 17.1875 26.5625 L 26.5625 26.5625 C 25.816406 30.996094 21.832031 34.375 17.1875 34.375 C 12.007813 34.375 7.8125 30.179688 7.8125 25 C 7.8125 19.820313 12.007813 15.625 17.1875 15.625 C 19.53125 15.625 21.667969 16.492188 23.3125 17.914063 L 26.671875 14.625 C 24.171875 12.335938 20.84375 10.9375 17.1875 10.9375 Z M 39.0625 17.1875 L 39.0625 21.875 L 34.375 21.875 L 34.375 25 L 39.0625 25 L 39.0625 29.6875 L 42.1875 29.6875 L 42.1875 25 L 46.875 25 L 46.875 21.875 L 42.1875 21.875 L 42.1875 17.1875 Z"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-item">
                        <ul class="links">
                            <li>
                                <a href="" class="link">Telstra.com sitemap</a>
                            </li>

                            <li>
                                <a href="" class="link">Contact us</a>
                            </li>

                            <li>
                                <a href="" class="link">Find a store</a>
                            </li>

                            <li>
                                <a href="" class="link">Careers</a>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-item second">
                        <ul class="links">
                            <li>
                                <a href="" class="link">About us</a>
                            </li>

                            <li>
                                <a href="" class="link">Telstra Wholesale</a>
                            </li>

                            <li>
                                <a href="" class="link">Telstra Global</a>
                            </li>

                            <li>
                                <a href="" class="link">Telstra Digital</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-item">
                        <ul class="links">
                            <li>
                                <a href="" class="link">Consumer Advice</a>
                            </li>

                            <li>
                                <a href="" class="link">Critical Information Summaries</a>
                            </li>

                            <li>
                                <a href="" class="link">Terms of use</a>
                            </li>

                            <li>
                                <a href="" class="link">Privacy</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </main>

    <script src="./all.js"></script>
    <script>
        const searchBtn = document.querySelector(".btn-search")
        const searchCancelBtn = document.querySelector("#form-cancel")
        const searchForm = document.querySelector(".form-search")
        const input = document.querySelector("#input")

        input.addEventListener("focus", () => {
            input.nextElementSibling.style.display = "block"
        })

        input.addEventListener("blur", () => {
            input.nextElementSibling.style.display = "none"
        })

        searchBtn.addEventListener("click", (e) => {
            e.preventDefault()
            searchForm.classList.add("active")
        })

        searchCancelBtn.addEventListener("click", (e) => {
            e.preventDefault()
            searchForm.classList.remove("active")
        })
    </script>
</body>

</html>