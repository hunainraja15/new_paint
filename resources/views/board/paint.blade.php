@extends('layouts.app')
@section('body')
    <style>
        table td {
            padding: 10px 2px !important;
        }

        .col-3 {
            margin-top: 10px;
        }

        /* form 1 */
        /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

                * {
                    outline: none;
                }

                .form-container {
                    background: #fff;
                    padding: 25px 40px 10px 40px;
                }

                .form-container .text {
                    text-align: center;
                    font-size: 41px;
                    font-weight: 600;
                    font-family: 'Poppins', sans-serif;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                }

                .form-container form {
                    padding: 30px 0 0 0;
                }

                .form-container form .form-row {
                    display: flex;
                    margin: 32px 0;
                }

                form .form-row .input-data {
                    width: 100%;
                    height: 40px;
                    margin: 0 20px;
                    position: relative;
                }

                form .form-row .textarea {
                    height: 70px;
                }

                .input-data input,
                .textarea textarea {
                    display: block;
                    width: 100%;
                    height: 100%;
                    border: none;
                    font-size: 17px;
                    border-bottom: 2px solid rgba(0, 0, 0, 0.12);
                }

                .input-data input:focus~label,
                .textarea textarea:focus~label,
                .input-data input:valid~label,
                .textarea textarea:valid~label {
                    transform: translateY(-20px);
                    font-size: 14px;
                    color: #3498db;
                }

                .textarea textarea {
                    resize: none;
                    padding-top: 10px;
                }

                .input-data label {
                    position: absolute;
                    pointer-events: none;
                    bottom: 10px;
                    font-size: 16px;
                    transition: all 0.3s ease;
                }

                .textarea label {
                    width: 100%;
                    bottom: 40px;
                    background: #fff;
                }

                .input-data .underline {
                    position: absolute;
                    bottom: 0;
                    height: 2px;
                    width: 100%;
                }

                .input-data .underline:before {
                    position: absolute;
                    content: "";
                    height: 2px;
                    width: 100%;
                    background: #3498db;
                    transform: scaleX(0);
                    transform-origin: center;
                    transition: transform 0.3s ease;
                }

                .input-data input:focus~.underline:before,
                .input-data input:valid~.underline:before,
                .textarea textarea:focus~.underline:before,
                .textarea textarea:valid~.underline:before {
                    transform: scale(1);
                }

                .submit-btn .input-data {
                    overflow: hidden;
                    height: 45px !important;
                    width: 25% !important;
                }

                .submit-btn .input-data .inner {
                    height: 100%;
                    width: 300%;
                    position: absolute;
                    left: -100%;
                    background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
                    transition: all 0.4s;
                }

                .submit-btn .input-data:hover .inner {
                    left: 0;
                }

                .submit-btn .input-data input {
                    background: none;
                    border: none;
                    color: #fff;
                    font-size: 17px;
                    font-weight: 500;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    cursor: pointer;
                    position: relative;
                    z-index: 2;
                }

                @media (max-width: 700px) {
                    .form-container .text {
                        font-size: 30px;
                    }

                    .form-container form {
                        padding: 10px 0 0 0;
                    }

                    .form-container form .form-row {
                        display: block;
                    }

                    form .form-row .input-data {
                        margin: 35px 0 !important;
                    }

                    .submit-btn .input-data {
                        width: 40% !important;
                    }
                } */

        /* form 1 end */

        /* form 2  */

        .form-capsule .form-group {

            position: relative;
        }


        .form-capsule .form-group label {

            position: absolute;
            font-size: 0.8em;
            top: 0px;
            width: 100%;
            padding: 0 10px;
            margin: 5px 0 10px 0;
            opacity: 0;
            transition: opacity 0.2s ease-out;

            -webkit-backface-visibility: hidden;
            pointer-events: none;
        }

        .form-capsule .show-label label {

            opacity: 1;
        }



        .form-capsule .form-control {

            height: 50px;
            padding: 15px 10px;
            box-shadow: 0 0 0 2px transparent;
            transition: all 0.2s ease-out;
        }

        .form-capsule .form-control:focus {

            box-shadow: 0 0 0 2px #206bc4;
            outline: transparent;
            border-color: transparent;
        }

        .form-capsule .show-label .form-control {

            padding-top: 25px;
            padding-bottom: 5px;
        }



        .form-capsule .form-group-textarea label {

            background-color: white;
            width: auto;
            right: 0;
            left: 0;
            margin: 1px 18px 1px 1px;
            border-radius: 3px 3px 0 0;
            padding-top: 4px;
        }

        .form-capsule .form-group-textarea .form-control {

            min-height: 100px;
            height: auto;
            max-width: 100%;
            min-width: 100%;
        }


        .form-capsule .form-group-markdown label {

            background-color: white;
            width: auto;
            right: 0;
            left: 0;
            margin: 1px 18px 1px 1px;
            border-radius: 3px 3px 0 0;
            padding-top: 4px;
        }


        .form-capsule .form-group-markdown .form-control {

            margin-top: 10px;
            min-height: 200px;
            height: auto;
            max-width: 100%;
            min-width: 100%;
        }

        .form-capsule .markdown-upload-button {

            cursor: pointer;
            color: blue;
        }

        .form-capsule .markdown-preview {

            margin-top: 10px;
            margin-bottom: 10px;
            height: 230px;
            width: 100%;
            border: 1px solid #CCC;
            border-radius: 4px;
        }

        .form-capsule .form-group-select label {

            opacity: 1;
            z-index: 1;
        }

        .form-capsule .form-group-select .form-control {

            padding-top: 25px;
            padding-bottom: 5px;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .select-wrapper {

            position: relative;
            z-index: 0;
        }

        .select-wrapper:before {

            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 50px;
            background-position: center center;
            background-repeat: no-repeat;
            pointer-events: none;
            background-image: url(https://tlc-web.qcode.co.uk/Graphics/dropdown-arrow-down-dark.svg);
        }



        .help-block-inline {

            position: absolute;
            top: 0;
            right: 25px;
            line-height: 50px;
            margin: 0;
            font-size: 90%;
            color: #CCC;
        }

        .help-block-floating {
            color: #555;
        }

        .help-block-background {
            right: 0;
            background-color: #eee;
            color: #555;
            border-radius: 0 3px 3px 0;
            height: 48px;
            margin: 1px;
            padding: 0 12px;
        }

        .tooltip-icon {

            position: absolute;
            top: 15px;
            right: 30px;
        }

        .radio-group {
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .radio,
        .radio+.radio {
            border-bottom: 1px solid #ccc;
            margin: 0;
        }

        .radio:last-child {
            border-bottom: 0;
        }

        .radio-option {
            display: none;
        }

        .radio-option:checked+.radio-option-label:before {
            border-color: #000666;
            border-width: 5px;
        }

        .radio-option-label {
            display: table
        }

        .radio-option-label:before {
            content: "";
            display: block;
            width: 16px;
            height: 16px;
            border: 1px solid #ccc;
            margin: 17px;
            border-radius: 50%;
            background-color: white;
            transition: border-width 0.3s ease;
        }

        .radio-option-label-text {
            display: table-cell;
            vertical-align: middle;
            padding: 10px 10px 10px 0;
            width: 100%;
            margin: 0;
        }

        .form-control {
            margin-top: 4px;
        }

        .label-form {
            opacity: 1 !important;
            z-index: 1;
        }
        

        /* form 2 end */

        /* form 3 */

        /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

                            * {
                                margin: 0;
                                padding: 0;
                                box-sizing: border-box;
                            }

                            body {
                                font-family: "Inter", sans-serif;
                            }

                            .formbold-main-wrapper {
                                display: flex;
                                align-items: center;
                                padding: 48px;
                            }

                            .formbold-form-wrapper {
                                width: 100%;
                                background: white;
                            }

                            .formbold-input-flex {
                                display: flex;
                                gap: 20px;
                                margin-bottom: 22px;
                            }

                            .formbold-input-flex>div {
                                width: 50%;
                                display: flex;
                                flex-direction: column-reverse;
                            }

                            .formbold-textarea {
                                display: flex;
                                flex-direction: column-reverse;
                            }

                            .formbold-form-input {
                                width: 100%;
                                padding-bottom: 10px;
                                border: none;
                                border-bottom: 1px solid #DDE3EC;
                                background: #FFFFFF;
                                font-weight: 500;
                                font-size: 16px;
                                color: #07074D;
                                outline: none;
                                resize: none;
                            }

                            .formbold-form-input::placeholder {
                                color: #536387;
                            }

                            .formbold-form-input:focus {
                                border-color: #6A64F1;
                            }

                            .formbold-form-label {
                                color: #07074D;
                                font-weight: 500;
                                font-size: 14px;
                                line-height: 24px;
                                display: block;
                                margin-bottom: 18px;
                            }

                            .formbold-form-input:focus+.formbold-form-label {
                                color: #6A64F1;
                            }

                            .formbold-input-file {
                                margin-top: 30px;
                            }

                            .formbold-input-file input[type="file"] {
                                position: absolute;
                                top: 6px;
                                left: 0;
                                z-index: -1;
                            }

                            .formbold-input-file .formbold-input-label {
                                display: flex;
                                align-items: center;
                                gap: 10px;
                                position: relative;
                            }

                            .formbold-filename-wrapper {
                                display: flex;
                                flex-direction: column;
                                gap: 6px;
                                margin-bottom: 22px;
                            }

                            .formbold-filename {
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                font-size: 14px;
                                line-height: 24px;
                                color: #536387;
                            }

                            .formbold-filename svg {
                                cursor: pointer;
                            }

                            .formbold-btn {
                                font-size: 16px;
                                border-radius: 5px;
                                padding: 12px 25px;
                                border: none;
                                font-weight: 500;
                                background-color: #6A64F1;
                                color: white;
                                cursor: pointer;
                                margin-top: 25px;
                            }

                            .formbold-btn:hover {
                                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                            } */

        /* form 3 end */

        /* form 4 */

        /*
                form {
                                                    margin: 10px 0px;
                                                    padding: 10px 20px;
                                                    border-radius: 8px;
                                                }

                                                h1 {
                                                    margin: 0 0 30px 0;
                                                    text-align: center;
                                                }

                                                input[type="text"],
                                                input[type="password"],
                                                input[type="date"],
                                                input[type="datetime"],
                                                input[type="email"],
                                                input[type="number"],
                                                input[type="search"],
                                                input[type="tel"],
                                                input[type="time"],
                                                input[type="url"],
                                                textarea,
                                                select {
                                                    background: rgba(255, 255, 255, 0.1);
                                                    border: none;
                                                    font-size: 16px;
                                                    height: auto;
                                                    margin: 0;
                                                    outline: 0;
                                                    padding: 15px;
                                                    width: 100%;
                                                    background-color: #e8eeef;
                                                    color: #000;
                                                    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
                                                    margin-bottom: 30px;
                                                    padding: 0px 10px;
                                                    border-radius: 4px;
                                                }

                                                input[type="radio"],
                                                input[type="checkbox"] {
                                                    margin: 0 4px 8px 0;
                                                }

                                                select {
                                                    padding: 6px;
                                                    height: 32px;
                                                    border-radius: 2px;
                                                }

                                                button {
                                                    padding: 19px 39px 18px 39px;
                                                    color: #FFF;
                                                    background-color: #4bc970;
                                                    font-size: 18px;
                                                    text-align: center;
                                                    font-style: normal;
                                                    border-radius: 5px;
                                                    width: 100%;
                                                    border: 1px solid #3ac162;
                                                    border-width: 1px 1px 3px;
                                                    box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
                                                    margin-bottom: 10px;
                                                }

                                                fieldset {
                                                    margin-bottom: 30px;
                                                    border: none;
                                                }

                                                legend {
                                                    font-size: 1.4em;
                                                    margin-bottom: 10px;
                                                }

                                                label {
                                                    display: block;
                                                    margin-bottom: 8px;
                                                }

                                                label.light {
                                                    font-weight: 300;
                                                    display: inline;
                                                }

                                                .number {
                                                    background-color: #5fcf80;
                                                    color: #fff;
                                                    height: 30px;
                                                    width: 30px;
                                                    display: inline-block;
                                                    font-size: 0.8em;
                                                    margin-right: 4px;
                                                    line-height: 30px;
                                                    text-align: center;
                                                    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
                                                    border-radius: 100%;
                                                } */


        /* form 4 end */

        /* form 5 */

        /* .form-element {
                                                                position: relative;
                                                                margin-top: 2.25rem;
                                                                margin-bottom: 2.25rem;
                                                            }

                                                            .form-element-hint {
                                                                font-weight: 400;
                                                                font-size: 0.6875rem;
                                                                color: #a6a6a6;
                                                                display: block;
                                                            }

                                                            .form-element-bar {
                                                                position: relative;
                                                                height: 1px;
                                                                background: #999;
                                                                display: block;
                                                            }

                                                            .form-element-bar::after {
                                                                content: "";
                                                                position: absolute;
                                                                bottom: 0;
                                                                left: 0;
                                                                right: 0;
                                                                background: #337ab7;
                                                                height: 2px;
                                                                display: block;
                                                                transform: rotateY(90deg);
                                                                transition: transform 0.28s ease;
                                                                will-change: transform;
                                                            }

                                                            .form-element-label {
                                                                position: absolute;
                                                                top: 0.75rem;
                                                                line-height: 1.5rem;
                                                                pointer-events: none;
                                                                padding-left: 0.125rem;
                                                                z-index: 1;
                                                                font-size: 1rem;
                                                                font-weight: normal;
                                                                white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis;
                                                                margin: 0;
                                                                color: #a6a6a6;
                                                                transform: translateY(-50%);
                                                                transform-origin: left center;
                                                                transition: transform 0.28s ease, color 0.28s linear, opacity 0.28s linear;
                                                                will-change: transform, color, opacity;
                                                            }

                                                            .form-element-field {
                                                                outline: none;
                                                                height: 1.5rem;
                                                                display: block;
                                                                background: none;
                                                                padding: 0.125rem 0.125rem 0.0625rem;
                                                                font-size: 1rem;
                                                                border: 0 solid transparent;
                                                                line-height: 1.5;
                                                                width: 100%;
                                                                color: #333;
                                                                box-shadow: none;
                                                                opacity: 0.001;
                                                                transition: opacity 0.28s ease;
                                                                will-change: opacity;
                                                            }

                                                            .form-element-field:-ms-input-placeholder {
                                                                color: #a6a6a6;
                                                                transform: scale(0.9);
                                                                transform-origin: left top;
                                                            }

                                                            .form-element-field::placeholder {
                                                                color: #a6a6a6;
                                                                transform: scale(0.9);
                                                                transform-origin: left top;
                                                            }

                                                            .form-element-field:focus~.form-element-bar::after {
                                                                transform: rotateY(0deg);
                                                            }

                                                            .form-element-field:focus~.form-element-label {
                                                                color: #337ab7;
                                                            }

                                                            .form-element-field.-hasvalue,
                                                            .form-element-field:focus {
                                                                opacity: 1;
                                                            }

                                                            .form-element-field.-hasvalue~.form-element-label,
                                                            .form-element-field:focus~.form-element-label {
                                                                transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
                                                                cursor: pointer;
                                                                pointer-events: auto;
                                                            }

                                                            .form-has-error .form-element-label.form-element-label,
                                                            .form-has-error .form-element-hint {
                                                                color: #4f66d9;
                                                            }

                                                            .form-has-error .form-element-bar,
                                                            .form-has-error .form-element-bar::after {
                                                                background: #4b40e5;
                                                            }

                                                            .form-is-success .form-element-label.form-element-label,
                                                            .form-is-success .form-element-hint {
                                                                color: #259337;
                                                            }

                                                            .form-is-success .form-element-bar::after {
                                                                background: #259337;
                                                            }

                                                            input.form-element-field:not(:placeholder-shown),
                                                            textarea.form-element-field:not(:placeholder-shown) {
                                                                opacity: 1;
                                                            }

                                                            input.form-element-field:not(:placeholder-shown)~.form-element-label,
                                                            textarea.form-element-field:not(:placeholder-shown)~.form-element-label {
                                                                transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
                                                                cursor: pointer;
                                                                pointer-events: auto;
                                                            }

                                                            textarea.form-element-field {
                                                                height: auto;
                                                                min-height: 3rem;
                                                            }

                                                            select.form-element-field {
                                                                -webkit-appearance: none;
                                                                -moz-appearance: none;
                                                                appearance: none;
                                                                cursor: pointer;
                                                            }

                                                            .form-select-placeholder {
                                                                color: #a6a6a6;
                                                                display: none;
                                                            }

                                                            .form-select .form-element-bar::before {
                                                                content: "";
                                                                position: absolute;
                                                                height: 0.5em;
                                                                width: 0.5em;
                                                                border-bottom: 1px solid #999;
                                                                border-right: 1px solid #999;
                                                                display: block;
                                                                right: 0.5em;
                                                                bottom: 0;
                                                                transition: transform 0.28s ease;
                                                                transform: translateY(-100%) rotateX(0deg) rotate(45deg);
                                                                will-change: transform;
                                                            }

                                                            .form-select select:focus~.form-element-bar::before {
                                                                transform: translateY(-50%) rotateX(180deg) rotate(45deg);
                                                            }

                                                            .form-element-field[type="number"] {
                                                                -moz-appearance: textfield;
                                                            }

                                                            .form-element-field[type="number"]::-webkit-outer-spin-button,
                                                            .form-element-field[type="number"]::-webkit-inner-spin-button {
                                                                -webkit-appearance: none;
                                                                margin: 0;
                                                            } */

        /* form 5 end */
    </style>
    <div class="page-header d-print-none">
        
    <div class="page-body">
        <div class="container-xl">
            {{-- <div class="card">
                <div class="card-body">
                    <div id="table-default" class="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        <input type="date" class="form-control" value="{{ date('m/d/Y') }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th><button class="table-sort" data-sort="sort-name">Employee</button>
                                    </th>
                                    <th><button class="table-sort" data-sort="sort-city">Job</button></th>
                                    <th><button class="table-sort" data-sort="sort-type">Task</button></th>
                                    <th><button class="table-sort" data-sort="sort-score">Manual
                                            Hour</button></th>
                                    <th><button class="table-sort" data-sort="sort-score">Manual Min</button>
                                    </th>
                                    <th><button class="table-sort" data-sort="sort-score">Start Hour</button>
                                    </th>
                                    <th><button class="table-sort" data-sort="sort-date">Start Min</button>
                                    </th>
                                    <th><button class="table-sort" data-sort="sort-quantity">Stop
                                            Hour</button></th>
                                    <th><button class="table-sort" data-sort="sort-progress">Stop
                                            Min</button></th>
                                    <th><button class="table-sort" data-sort="sort-progress">Time
                                            Total</button></th>
                                    <th><button class="table-sort" data-sort="sort-progress">Finished</button></th>


                                </tr>
                            </thead>
                            <tbody class="table-tbody">
                                <tr>
                                    <td class="sort-name">
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Employee</option>
                                            <option value="">Hunain Raja</option>
                                            <option value="">Raja Hunain</option>
                                            <option value="">Hunain Hmza</option>
                                        </select>
                                    </td>
                                    <td class="sort-city">
                                        <select name="" id="" class="form-control">
                                            <option value="">VC-123</option>
                                            <option value="">VC-124</option>
                                            <option value="">VC-125</option>
                                            <option value="">VC-125</option>
                                        </select>
                                    </td>
                                    <td class="sort-type">
                                        <select name="" id="" class="form-control task_input">
                                            <option value="MOVE / MOVER">MOVE / MOVER</option>
                                            <option value="DISASSEMBLE / QUITA PIESAS">DISASSEMBLE / QUITA PIESAS</option>
                                            <option value="WASH">WASH</option>
                                            <option value="SAND / LIJAR">SAND / LIJAR</option>
                                            <option value="BLAST">BLAST</option>
                                            <option value="TAPE / TAPAR">TAPE / TAPAR</option>
                                            <option value="COVER">COVER</option>
                                            <option value="BONDO">BONDO</option>
                                            <option value="PRIME">PRIME</option>
                                            <option value="SEAM SEALER">SEAM SEALER</option>
                                            <option value="PAINT">PAINT</option>
                                            <option value="TOUCH-UP">TOUCH-UP</option>
                                            <option value="UNMASK">UNMASK</option>
                                            <option value="REASSEMBLE / PONE PIESAS">REASSEMBLE / PONE PIESAS</option>
                                        </select>
                                    </td>
                                    <td>

                                        <select name="" id="" class="form-control manual_input">
                                            <option value="">Select time</option>
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="" class="form-control manual_input">
                                            <option value="">Select time</option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </td>
                                    <td class="sort-score">
                                        <select name="" id="" class="form-control time_inputs">
                                            <option value="">Select time</option>
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                    </td>
                                    <td class="sort-date" data-date="1628122643">
                                        <select name="" id="" class="form-control time_inputs">
                                            <option value="">Select time</option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </td>
                                    <td class="sort-date" data-date="">
                                        <select name="" id="" class="form-control">
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                    </td>
                                    <td class="sort-date" data-date="">
                                        <select name="" id="" class="form-control">
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </td>
                                    <td class="sort-quantity">
                                        <input type="text" placeholder="Total time" readonly=""
                                            style="width: 100px" class="form-control">
                                    </td>
                                    <td class="sort-progress">
                                        <select name="" id="" style="width: 80%" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th style=""><button class="table-sort"
                                            data-sort="sort-progress">Primer</button>
                                    </th>
                                    <th style=""><button class="table-sort" data-sort="sort-progress">Stock
                                            Paint</button></th>
                                    <th style=""><button class="table-sort" data-sort="sort-progress">Paint
                                            Board</button></th>
                                    <th style=""><button class="table-sort" data-sort="sort-progress">Name &
                                            Code</button></th>
                                    <th style=""><button class="table-sort" data-sort="sort-progress">Cost</button>
                                    </th>
                                    <th style=""><button class="table-sort"
                                            data-sort="sort-progress">Quantity</button></th>
                                    <th style=""><button class="table-sort"
                                            data-sort="sort-progress">Comments</button></th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <select name="" id="" class="form-control primer_input">
                                        <option value="">MOPOXY</option>
                                        <option value="">TUFFCOTE</option>
                                        <option value="">MACROPOXY</option>
                                        <option value="">ZINC PRIMER</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="" class="form-control stock_paint">
                                        <option value="">Select Stock paint</option>
                                        <option value="IMRON FP WHITE">IMRON FP WHITE</option>
                                        <option value="IMRON FP BLACK">IMRON FP BLACK</option>
                                        <option value="IMRON 4:1 GRAY">IMRON 4:1 GRAY</option>
                                        <option value="PROTHANE BLACK">PROTHANE BLACK</option>
                                        <option value="PROTHANE OXFORD WHITE">PROTHANE OXFORD WHITE</option>
                                        <option value="PROTHANE SEMI-GLOSS BLACK">PROTHANE SEMI-GLOSS BLACK</option>
                                        <option value="IMRON JLG ORANGE">IMRON JLG ORANGE</option>
                                        <option value="MOTHANE SAFETY RED">MOTHANE SAFETY RED</option>
                                        <option value="RIVAL SOUTHWEST BLUE">RIVAL SOUTHWEST BLUE</option>
                                        <option value="IMRON PHOENIX YELLOW">IMRON PHOENIX YELLOW</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="" class="form-control paint_board_input">
                                        <option value="">IMRON</option>
                                        <option value="">RIVAL</option>
                                        <option value="">PROTHANE</option>
                                        <option value="">MOTHANE</option>
                                        <option value="">ACROLON ULTRA</option>
                                        <option value="">ACROLON 218HS</option>
                                        <option value="">NASON 2K</option>
                                        <option value="">ENAMEL</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control name_and_code_input"
                                        placeholder="Name & Code">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Cost">
                                </td>
                                <td>
                                    <input type="text" placeholder="Quantity" class="form-control">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Comment">
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-header">
                    <div>
                        <input type="date" class="form-control">
                    </div>

                </div>
                <div class="card-body">
                    <div class="paint-body">
                        <div class="row">
                            <div class="col-3">

                                <label for="form-label">Employee</label>

                                <div class="mt-2">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Employee</option>
                                        <option value="">Hunain Raja</option>
                                        <option value="">Raja Hunain</option>
                                        <option value="">Hunain Hmza</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Job</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Job</option>
                                        <option value="">VC-123</option>
                                        <option value="">VC-124</option>
                                        <option value="">VC-125</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Task</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control task_input">
                                        <option value="MOVE / MOVER">MOVE / MOVER</option>
                                        <option value="DISASSEMBLE / QUITA PIESAS">DISASSEMBLE / QUITA PIESAS</option>
                                        <option value="WASH">WASH</option>
                                        <option value="SAND / LIJAR">SAND / LIJAR</option>
                                        <option value="BLAST">BLAST</option>
                                        <option value="TAPE / TAPAR">TAPE / TAPAR</option>
                                        <option value="COVER">COVER</option>
                                        <option value="BONDO">BONDO</option>
                                        <option value="PRIME">PRIME</option>
                                        <option value="SEAM SEALER">SEAM SEALER</option>
                                        <option value="PAINT">PAINT</option>
                                        <option value="TOUCH-UP">TOUCH-UP</option>
                                        <option value="UNMASK">UNMASK</option>
                                        <option value="REASSEMBLE / PONE PIESAS">REASSEMBLE / PONE PIESAS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Manual Hour</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id=""
                                        class="form-control manual_input manualstarthour">
                                        <option value="">Select time</option>
                                        <option value="01">01:00</option>
                                        <option value="02">02:00</option>
                                        <option value="03">03:00</option>
                                        <option value="04">04:00</option>
                                        <option value="05">05:00</option>
                                        <option value="06">06:00</option>
                                        <option value="07">07:00</option>
                                        <option value="08">08:00</option>
                                        <option value="09">09:00</option>
                                        <option value="10">10:00</option>
                                        <option value="11">11:00</option>
                                        <option value="12">12:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Manual Min</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id=""
                                        class="form-control manual_minutes  manual_input">
                                        <option value="">Select time</option>
                                        <option value="00">0:00</option>
                                        <option value="15">0:15</option>
                                        <option value="30">0:30</option>
                                        <option value="45">0:45</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Start Hour</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control time_inputs starthour">
                                        <option value="">Select time</option>
                                        <option value="01">01:00</option>
                                        <option value="02">02:00</option>
                                        <option value="03">03:00</option>
                                        <option value="04">04:00</option>
                                        <option value="05">05:00</option>
                                        <option value="06">06:00</option>
                                        <option value="07">07:00</option>
                                        <option value="08">08:00</option>
                                        <option value="09">09:00</option>
                                        <option value="10">10:00</option>
                                        <option value="11">11:00</option>
                                        <option value="12">12:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Start Min</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control start_minutes time_inputs">
                                        <option value="">Select time</option>
                                        <option value="00">0:00</option>
                                        <option value="15">0:15</option>
                                        <option value="30">0:30</option>
                                        <option value="45">0:45</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Stop Hour</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control stop_hour">
                                        <option value="">Select time</option>
                                        <option value="01">01:00</option>
                                        <option value="02">02:00</option>
                                        <option value="03">03:00</option>
                                        <option value="04">04:00</option>
                                        <option value="05">05:00</option>
                                        <option value="06">06:00</option>
                                        <option value="07">07:00</option>
                                        <option value="08">08:00</option>
                                        <option value="09">09:00</option>
                                        <option value="10">10:00</option>
                                        <option value="11">11:00</option>
                                        <option value="12">12:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Stop Min</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id=""
                                        class="form-control stop_minutes calculate_time">
                                        <option value="">Select time</option>
                                        <option value="00">0:00</option>
                                        <option value="15">0:15</option>
                                        <option value="30">0:30</option>
                                        <option value="45">0:45</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Total Time</label>
                                </div>
                                <div class="mt-2">
                                    <input type="text" class="form-control total_time" placeholder="Total time"
                                        readonly>

                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Finished</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control manual_input">
                                        <option value="">Select option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Primer</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control primer_input">
                                        <option value="">Select option</option>
                                        <option value="MOPOXY">MOPOXY</option>
                                        <option value="TUFFCOTE">TUFFCOTE</option>
                                        <option value="MACROPOXY">MACROPOXY</option>
                                        <option value="ZINC PRIMER">ZINC PRIMER</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Stock Paint</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control stock_paint">
                                        <option value="">Select Stock Paint</option>
                                        <option value="IMRON FP WHITE">IMRON FP WHITE</option>
                                        <option value="IMRON FP BLACK">IMRON FP BLACK</option>
                                        <option value="IMRON 4:1 GRAY">IMRON 4:1 GRAY</option>
                                        <option value="PROTHANE BLACK">PROTHANE BLACK</option>
                                        <option value="PROTHANE OXFORD WHITE">PROTHANE OXFORD WHITE</option>
                                        <option value="PROTHANE SEMI-GLOSS BLACK">PROTHANE SEMI-GLOSS BLACK</option>
                                        <option value="IMRON JLG ORANGE">IMRON JLG ORANGE</option>
                                        <option value="MOTHANE SAFETY RED">MOTHANE SAFETY RED</option>
                                        <option value="RIVAL SOUTHWEST BLUE">RIVAL SOUTHWEST BLUE</option>
                                        <option value="IMRON PHOENIX YELLOW">IMRON PHOENIX YELLOW</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Paint Board</label>
                                </div>
                                <div class="mt-2">
                                    <select name="" id="" class="form-control paint_board_input">
                                        <option value="">IMRON</option>
                                        <option value="">RIVAL</option>
                                        <option value="">PROTHANE</option>
                                        <option value="">MOTHANE</option>
                                        <option value="">ACROLON ULTRA</option>
                                        <option value="">ACROLON 218HS</option>
                                        <option value="">NASON 2K</option>
                                        <option value="">ENAMEL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Name & Code</label>
                                </div>
                                <div class="mt-2">
                                    <input type="text" class="form-control name_and_code_input"
                                        placeholder="Name &amp; Code">

                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Cost</label>
                                </div>
                                <div class="mt-2">
                                    <input type="text" class="form-control" placeholder="Cost">

                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Quantity</label>
                                </div>
                                <div class="mt-2">
                                    <input type="text" placeholder="Quantity" class="form-control">
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <label for="employee">Comments</label>
                                </div>
                                <div class="mt-2">
                                    <input type="text" class="form-control" placeholder="Comment">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- form 1 --}}
            {{-- <div class="card">
                <div class="card-body">
                    <div class="form-container">

                        <form action="#" class="pt-0">
                            <div class="form-row">
                                <div class="input-data">
                                    <input type="text" required>
                                    <div class="underline"></div>
                                    <label for="">First Name</label>
                                </div>
                                <div class="input-data">
                                    <input type="text" required>
                                    <div class="underline"></div>
                                    <label for="">First Name</label>
                                </div>
                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div> --}}
            {{-- forn 1 end --}}

            {{-- form 2  --}}
            

            <div class="card mt-5">
                <div class="card-header">
                    Add Paint Board
                </div>
                <div class="card-body">
                    <div class="container">
                        <form class="form-capsule" action="{{url('board/paint/create')}}" role="form">
                            <div class="row">
                                <div class="col-3">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Employee</label>
                                    <div class="select-wrapper">
                                        <select class="form-control" name="employee" id="sel1">
                                            <option value=""></option>
                                            <option value="Hunain Raja">Hunain Raja</option>
                                            <option value="Raja Hunain">Raja Hunain</option>
                                            <option value="Hunain Hmza">Hunain Hmza</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Job</label>
                                    <div class="select-wrapper">
                                        <select class="form-control" name="job" id="sel1">
                                            <option value=""></option>
                                            <option value="VC-123">VC-123</option>
                                            <option value="VC-124">VC-124</option>
                                            <option value="VC-125">VC-125</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Task </label>
                                    <div class="select-wrapper">
                                        <select class="form-control task_input" name="task" id="sel1">
                                            <option value=""></option>
                                            <option value="MOVE / MOVER">MOVE / MOVER</option>
                                            <option value="DISASSEMBLE / QUITA PIESAS">DISASSEMBLE / QUITA PIESAS
                                            </option>
                                            <option value="WASH">WASH</option>
                                            <option value="SAND / LIJAR">SAND / LIJAR</option>
                                            <option value="BLAST">BLAST</option>
                                            <option value="TAPE / TAPAR">TAPE / TAPAR</option>
                                            <option value="COVER">COVER</option>
                                            <option value="BONDO">BONDO</option>
                                            <option value="PRIME">PRIME</option>
                                            <option value="SEAM SEALER">SEAM SEALER</option>
                                            <option value="PAINT">PAINT</option>
                                            <option value="TOUCH-UP">TOUCH-UP</option>
                                            <option value="UNMASK">UNMASK</option>
                                            <option value="REASSEMBLE / PONE PIESAS">REASSEMBLE / PONE PIESAS
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Start Hour </label>
                                    <div class="select-wrapper">
                                        <select class="form-control start_hour" name="start_hour" id="sel1">
                                            <option value=""></option>
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Stop Hour </label>
                                    <div class="select-wrapper">
                                        <select class="form-control start_minutes" name="start_minutes" id="sel1">
                                            <option value=""></option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Start Mins </label>
                                    <div class="select-wrapper">
                                        <select class="form-control stop_hour" name="stop_hour" id="sel1">
                                            <option value=""></option>
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Stop Mins </label>
                                    <div class="select-wrapper">
                                        <select class="form-control stop_minutes calculate_time" name="stop_minutes" id="sel1">
                                            <option value=""></option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-3">
                                    <label for="email" class="label-form">Total Time</label>
                                    <input type="text" class="form-control total_time  " name="total_time" readonly="" id="email">
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Finished ?</label>
                                    <div class="select-wrapper">
                                        <select class="form-control" name="finished" id="sel1">
                                            <option value=""></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Primer</label>
                                    <div class="select-wrapper">
                                        <select class="form-control primer_input" name="primer" id="sel1">
                                            <option value=""></option>
                                            <option value="MOPOXY">MOPOXY</option>
                                            <option value="TUFFCOTE">TUFFCOTE</option>
                                            <option value="MACROPOXY">MACROPOXY</option>
                                            <option value="ZINC PRIMER">ZINC PRIMER</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Stok Paint</label>
                                    <div class="select-wrapper">
                                        <select class="form-control stock_paint" name="stock_paint" id="sel1">
                                            <option value=""></option>
                                            <option value="IMRON FP WHITE">IMRON FP WHITE</option>
                                            <option value="IMRON FP BLACK">IMRON FP BLACK</option>
                                            <option value="IMRON 4:1 GRAY">IMRON 4:1 GRAY</option>
                                            <option value="PROTHANE BLACK">PROTHANE BLACK</option>
                                            <option value="PROTHANE OXFORD WHITE">PROTHANE OXFORD WHITE</option>
                                            <option value="PROTHANE SEMI-GLOSS BLACK">PROTHANE SEMI-GLOSS BLACK
                                            </option>
                                            <option value="IMRON JLG ORANGE">IMRON JLG ORANGE</option>
                                            <option value="MOTHANE SAFETY RED">MOTHANE SAFETY RED</option>
                                            <option value="RIVAL SOUTHWEST BLUE">RIVAL SOUTHWEST BLUE</option>
                                            <option value="IMRON PHOENIX YELLOW">IMRON PHOENIX YELLOW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Paint Brand</label>
                                    <div class="select-wrapper">
                                        <select class="form-control paint_board_input" name="paint_board" id="sel1">
                                            <option value=""></option>
                                            <option value="IMRON">IMRON</option>
                                            <option value="RIVAL">RIVAL</option>
                                            <option value="RIVALRIVAL">RIVALRIVAL</option>
                                            <option value="MOTHANE">MOTHANE</option>
                                            <option value="ACROLON ULTRA">ACROLON ULTRA</option>
                                            <option value="ACROLON 218HS">ACROLON 218HS</option>
                                            <option value="NASON 2K">NASON 2K</option>
                                            <option value="ENAMEL">ENAMEL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-3">
                                    <label for="email" class="label-form">Name & Code</label>
                                    <input type="text" name="name_and_code" class="form-control name_and_code_input" id="email">
                                </div>
                                <div class="form-group col-3">
                                    <label for="email" class="label-form" name="cost">Cost</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group col-3">
                                    <label for="email" class="label-form">Quantity</label>
                                    <input type="text" class="form-control" id="email" name="quantity">
                                </div>
                                <div class="form-group col-3">
                                    <label for="email" class="label-form">Comment</label>
                                    <input type="text" class="form-control" name="comment" id="email">
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 5l0 14"></path>
                                            <path d="M5 12l14 0"></path>
                                        </svg>
                                        Submit
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    paint Board List
                </div>
                <div class="card-body">
                    {{-- table-responsive --}}
                    <div class="">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Job</th>
                                    <th>Task</th>
                                    <th>Start Hour</th>
                                    <th>Start Mins</th>
                                    <th>Stop Hour</th>
                                    <th>Stop Mins</th>
                                    <th>Total Time</th>
                                    <th>Finished</th>
                                    <th>Primer</th>
                                    <th>Stok Paint</th>
                                    <th>Paint board</th>
                                    <th>Name & Coad</th>
                                    <th>Cost</th>
                                    <th>Quantity</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Raja Hunain</td>
                                    <td>VC-123</td>
                                    <td>BLAST</td>
                                    <td>02:00</td>
                                    <td>00:15</td>
                                    <td>01:00</td>
                                    <td>00:15</td>
                                    <td>01:00</td>
                                    <td>Yes</td>
                                    <td>MOPOXY</td>
                                    <td>IMRON FP BLACK</td>
                                    <td>RIVAL</td>
                                    <td></td>
                                    <td>200</td>
                                    <td>3</td>
                                    <td>Lorem, ipsum.</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            {{-- form 2 end --}}
            {{-- fom 2 js --}}

            {{-- form 3 --}}
            {{-- <div class="card">
                <div class="card-body">
                    <div class="formbold-main-wrapper">

                        <div class="formbold-form-wrapper">
                            <form action="" method="POST">
                                <div class="formbold-input-flex">
                                    
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Employee</option>
                                            <option value="">Hunain Raja</option>
                                            <option value="">Raja Hunain</option>
                                            <option value="">Hunain Hmza</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label"> Phone </label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Job</option>
                                            <option value="">VC-123</option>
                                            <option value="">VC-124</option>
                                            <option value="">VC-125</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Slect Job </label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Task</option>
                                            <option value="MOVE / MOVER">MOVE / MOVER</option>
                                            <option value="DISASSEMBLE / QUITA PIESAS">DISASSEMBLE / QUITA PIESAS
                                            </option>
                                            <option value="WASH">WASH</option>
                                            <option value="SAND / LIJAR">SAND / LIJAR</option>
                                            <option value="BLAST">BLAST</option>
                                            <option value="TAPE / TAPAR">TAPE / TAPAR</option>
                                            <option value="COVER">COVER</option>
                                            <option value="BONDO">BONDO</option>
                                            <option value="PRIME">PRIME</option>
                                            <option value="SEAM SEALER">SEAM SEALER</option>
                                            <option value="PAINT">PAINT</option>
                                            <option value="TOUCH-UP">TOUCH-UP</option>
                                            <option value="UNMASK">UNMASK</option>
                                            <option value="REASSEMBLE / PONE PIESAS">REASSEMBLE / PONE PIESAS
                                            </option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Task </label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Start Hour</option>
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Start Hour</label>
                                    </div>
                                </div>
                                <div class="formbold-input-flex">

                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Start Min</option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Start Min</label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Stop Hour</option>
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Stop Hour</label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="00">Select Stop Mins</option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Stop Mins</label>
                                    </div>
                                    <div style="width: 25%">

                                        <input type="text" name="firstname" readonly id="firstname"
                                            placeholder="No Total Time" class="formbold-form-input" />
                                        <label for="firstname" class="formbold-form-label">Total Time </label>
                                    </div>
                                </div>
                                <div class="formbold-input-flex">

                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Finish</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>

                                        </select>
                                        <label for="phone" class="formbold-form-label">Finished</label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Primer</option>
                                            <option value="MOPOXY">MOPOXY</option>
                                            <option value="TUFFCOTE">TUFFCOTE</option>
                                            <option value="MACROPOXY">MACROPOXY</option>
                                            <option value="ZINC PRIMER">ZINC PRIMER</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Primer</label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Stok Paint</option>
                                            <option value="IMRON FP WHITE">IMRON FP WHITE</option>
                                            <option value="IMRON FP BLACK">IMRON FP BLACK</option>
                                            <option value="IMRON 4:1 GRAY">IMRON 4:1 GRAY</option>
                                            <option value="PROTHANE BLACK">PROTHANE BLACK</option>
                                            <option value="PROTHANE OXFORD WHITE">PROTHANE OXFORD WHITE</option>
                                            <option value="PROTHANE SEMI-GLOSS BLACK">PROTHANE SEMI-GLOSS BLACK
                                            </option>
                                            <option value="IMRON JLG ORANGE">IMRON JLG ORANGE</option>
                                            <option value="MOTHANE SAFETY RED">MOTHANE SAFETY RED</option>
                                            <option value="RIVAL SOUTHWEST BLUE">RIVAL SOUTHWEST BLUE</option>
                                            <option value="IMRON PHOENIX YELLOW">IMRON PHOENIX YELLOW</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Stok Paint</label>
                                    </div>
                                    <div style="width: 25%">
                                        <select name=""id="phone" class="formbold-form-input">
                                            <option value="">Select Paint Brand</option>
                                            <option value="">IMRON</option>
                                            <option value="">RIVAL</option>
                                            <option value="">PROTHANE</option>
                                            <option value="">MOTHANE</option>
                                            <option value="">ACROLON ULTRA</option>
                                            <option value="">ACROLON 218HS</option>
                                            <option value="">NASON 2K</option>
                                            <option value="">ENAMEL</option>
                                        </select>
                                        <label for="phone" class="formbold-form-label">Paint Brand</label>
                                    </div>

                                </div>
                                <div class="formbold-input-flex">

                                    <div style="width: 25%">
                                        <input type="text" name="firstname" id="firstname" placeholder="Enter Name & Code"
                                            class="formbold-form-input" />
                                        <label for="firstname" class="formbold-form-label">Name & Code</label>
                                    </div>
                                    <div style="width: 25%">
                                        <input type="text" name="firstname" id="firstname" placeholder="Enter Cost"
                                            class="formbold-form-input" />
                                        <label for="firstname" class="formbold-form-label">Cost</label>
                                    </div>
                                    <div style="width: 25%">
                                        <input type="text" name="firstname" id="firstname" placeholder="Enter Quantity"
                                            class="formbold-form-input" />
                                        <label for="firstname" class="formbold-form-label">Quantity</label>
                                    </div>
                                    <div style="width: 25%">
                                        <input type="text" name="firstname" id="firstname" placeholder="Enter Comment"
                                            class="formbold-form-input" />
                                        <label for="firstname" class="formbold-form-label">Comment</label>
                                    </div>
                                    

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- form 3 end --}}

            {{-- form 4 --}}
            {{-- <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="index.html" method="post">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="job">Employee</label>
                                            <select id="job" name="user_job">
                                                <option value="" >Select Employee</option>
                                                <option value="">Hunain Raja</option>
                                                <option value="">Raja Hunain</option>
                                                <option value="">Hunain Hmza</option>

                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label for="job">Job</label>
                                            <select id="job" name="user_job">
                                                <option value="">Select Job</option>
                                        <option value="">VC-123</option>
                                        <option value="">VC-124</option>
                                        <option value="">VC-125</option>
                                            </select>
                                        </div>
                                            <div class="col-3">
                                                <label for="job">Task</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Task</option>
                                                    <option value="MOVE / MOVER">MOVE / MOVER</option>
                                                    <option value="DISASSEMBLE / QUITA PIESAS">DISASSEMBLE / QUITA PIESAS
                                                    </option>
                                                    <option value="WASH">WASH</option>
                                                    <option value="SAND / LIJAR">SAND / LIJAR</option>
                                                    <option value="BLAST">BLAST</option>
                                                    <option value="TAPE / TAPAR">TAPE / TAPAR</option>
                                                    <option value="COVER">COVER</option>
                                                    <option value="BONDO">BONDO</option>
                                                    <option value="PRIME">PRIME</option>
                                                    <option value="SEAM SEALER">SEAM SEALER</option>
                                                    <option value="PAINT">PAINT</option>
                                                    <option value="TOUCH-UP">TOUCH-UP</option>
                                                    <option value="UNMASK">UNMASK</option>
                                                    <option value="REASSEMBLE / PONE PIESAS">REASSEMBLE / PONE PIESAS
                                                    </option>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Start Hour</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Start Hour</option>
                                                    <option value="01">01:00</option>
                                                    <option value="02">02:00</option>
                                                    <option value="03">03:00</option>
                                                    <option value="04">04:00</option>
                                                    <option value="05">05:00</option>
                                                    <option value="06">06:00</option>
                                                    <option value="07">07:00</option>
                                                    <option value="08">08:00</option>
                                                    <option value="09">09:00</option>
                                                    <option value="10">10:00</option>
                                                    <option value="11">11:00</option>
                                                    <option value="12">12:00</option>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Start Min</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Start Min</option>
                                                    <option value="00">0:00</option>
                                                    <option value="15">0:15</option>
                                                    <option value="30">0:30</option>
                                                    <option value="45">0:45</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Stop Hour</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Stop Hour</option>
                                                    <option value="02">02:00</option>
                                                    <option value="03">03:00</option>
                                                    <option value="04">04:00</option>
                                                    <option value="05">05:00</option>
                                                    <option value="06">06:00</option>
                                                    <option value="07">07:00</option>
                                                    <option value="08">08:00</option>
                                                    <option value="09">09:00</option>
                                                    <option value="10">10:00</option>
                                                    <option value="11">11:00</option>
                                                    <option value="12">12:00</option>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Stop Min</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Stop Min</option>
                                                    <option value="00">0:00</option>
                                                    <option value="15">0:15</option>
                                                    <option value="30">0:30</option>
                                                    <option value="45">0:45</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Total Time</label>
                                                <input type="text" placeholder="No Total Time"
                                                    style="height: 32px; border-radius:none;" readonly>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Finished</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Finish</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Primer</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Primer</option>
                                                    <option value="MOPOXY">MOPOXY</option>
                                                    <option value="TUFFCOTE">TUFFCOTE</option>
                                                    <option value="MACROPOXY">MACROPOXY</option>
                                                    <option value="ZINC PRIMER">ZINC PRIMER</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Stok Paint</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Stok Paint</option>
                                                    <option value="IMRON FP WHITE">IMRON FP WHITE</option>
                                                    <option value="IMRON FP BLACK">IMRON FP BLACK</option>
                                                    <option value="IMRON 4:1 GRAY">IMRON 4:1 GRAY</option>
                                                    <option value="PROTHANE BLACK">PROTHANE BLACK</option>
                                                    <option value="PROTHANE OXFORD WHITE">PROTHANE OXFORD WHITE</option>
                                                    <option value="PROTHANE SEMI-GLOSS BLACK">PROTHANE SEMI-GLOSS BLACK
                                                    </option>
                                                    <option value="IMRON JLG ORANGE">IMRON JLG ORANGE</option>
                                                    <option value="MOTHANE SAFETY RED">MOTHANE SAFETY RED</option>
                                                    <option value="RIVAL SOUTHWEST BLUE">RIVAL SOUTHWEST BLUE</option>
                                                    <option value="IMRON PHOENIX YELLOW">IMRON PHOENIX YELLOW</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Paint Brand</label>
                                                <select id="job" name="user_job">
                                                    <option value="">Select Paint Brand</option>
                                                    <option value="">IMRON</option>
                                                    <option value="">RIVAL</option>
                                                    <option value="">PROTHANE</option>
                                                    <option value="">MOTHANE</option>
                                                    <option value="">ACROLON ULTRA</option>
                                                    <option value="">ACROLON 218HS</option>
                                                    <option value="">NASON 2K</option>
                                                    <option value="">ENAMEL</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Name & Code</label>
                                                <input type="text" placeholder="Enter Name & Code" style="height: 32px; border-radius:none;" readonly>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Cost</label>
                                                <input type="text" placeholder="Enter Cost" style="height: 32px; border-radius:none;" readonly>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Quantity</label>
                                                <input type="text" placeholder="Enter Quantity" style="height: 32px; border-radius:none;" readonly>
                                            </div>
                                            <div class="col-3">
                                                <label for="job">Comment</label>
                                                <input type="text" placeholder="Your Comment" style="height: 32px; border-radius:none;" readonly>
                                            </div>
                                        </div>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- form 4 end --}}

            {{-- form 5 --}}

            {{-- <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Employee</option>
                                        <option value="">Hunain Raja</option>
                                        <option value="">Raja Hunain</option>
                                        <option value="">Hunain Hmza</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Employee</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Job</option>
                                        <option value="">VC-123</option>
                                        <option value="">VC-124</option>
                                        <option value="">VC-125</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Job</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Task</option>
                                        <option value="MOVE / MOVER">MOVE / MOVER</option>
                                        <option value="DISASSEMBLE / QUITA PIESAS">DISASSEMBLE / QUITA PIESAS</option>
                                        <option value="WASH">WASH</option>
                                        <option value="SAND / LIJAR">SAND / LIJAR</option>
                                        <option value="BLAST">BLAST</option>
                                        <option value="TAPE / TAPAR">TAPE / TAPAR</option>
                                        <option value="COVER">COVER</option>
                                        <option value="BONDO">BONDO</option>
                                        <option value="PRIME">PRIME</option>
                                        <option value="SEAM SEALER">SEAM SEALER</option>
                                        <option value="PAINT">PAINT</option>
                                        <option value="TOUCH-UP">TOUCH-UP</option>
                                        <option value="UNMASK">UNMASK</option>
                                        <option value="REASSEMBLE / PONE PIESAS">REASSEMBLE / PONE PIESAS</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Task</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Start Hour</option>
                                        <option value="01">01:00</option>
                                        <option value="02">02:00</option>
                                        <option value="03">03:00</option>
                                        <option value="04">04:00</option>
                                        <option value="05">05:00</option>
                                        <option value="06">06:00</option>
                                        <option value="07">07:00</option>
                                        <option value="08">08:00</option>
                                        <option value="09">09:00</option>
                                        <option value="10">10:00</option>
                                        <option value="11">11:00</option>
                                        <option value="12">12:00</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Start
                                        Hour</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Start Mins</option>
                                        <option value="00">0:00</option>
                                        <option value="15">0:15</option>
                                        <option value="30">0:30</option>
                                        <option value="45">0:45</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Start
                                        Mins</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Stop Hour</option>
                                        <option value="01">01:00</option>
                                        <option value="02">02:00</option>
                                        <option value="03">03:00</option>
                                        <option value="04">04:00</option>
                                        <option value="05">05:00</option>
                                        <option value="06">06:00</option>
                                        <option value="07">07:00</option>
                                        <option value="08">08:00</option>
                                        <option value="09">09:00</option>
                                        <option value="10">10:00</option>
                                        <option value="11">11:00</option>
                                        <option value="12">12:00</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Stop
                                        Hour</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Stop Mins</option>
                                        <option value="00">0:00</option>
                                        <option value="15">0:15</option>
                                        <option value="30">0:30</option>
                                        <option value="45">0:45</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Stop
                                        Mins</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <input type="text" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue" readonly placeholder="NoTotal
                                        Time">
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Total
                                        Time</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Finishd</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Finishd</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Primer</option>
                                        <option value="MOPOXY">MOPOXY</option>
                                        <option value="TUFFCOTE">TUFFCOTE</option>
                                        <option value="MACROPOXY">MACROPOXY</option>
                                        <option value="ZINC PRIMER">ZINC PRIMER</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Primer</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Stock Paint</option>
                                        <option value="IMRON FP WHITE">IMRON FP WHITE</option>
                                        <option value="IMRON FP BLACK">IMRON FP BLACK</option>
                                        <option value="IMRON 4:1 GRAY">IMRON 4:1 GRAY</option>
                                        <option value="PROTHANE BLACK">PROTHANE BLACK</option>
                                        <option value="PROTHANE OXFORD WHITE">PROTHANE OXFORD WHITE</option>
                                        <option value="PROTHANE SEMI-GLOSS BLACK">PROTHANE SEMI-GLOSS BLACK</option>
                                        <option value="IMRON JLG ORANGE">IMRON JLG ORANGE</option>
                                        <option value="MOTHANE SAFETY RED">MOTHANE SAFETY RED</option>
                                        <option value="RIVAL SOUTHWEST BLUE">RIVAL SOUTHWEST BLUE</option>
                                        <option value="IMRON PHOENIX YELLOW">IMRON PHOENIX YELLOW</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Stok
                                        Paint</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <select name="" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop"
                                        class="form-element-field -hasvalue">
                                        <option value="">Select Paint Brand</option>
                                        <option value="">IMRON</option>
                                        <option value="">RIVAL</option>
                                        <option value="">PROTHANE</option>
                                        <option value="">MOTHANE</option>
                                        <option value="">ACROLON ULTRA</option>
                                        <option value="">ACROLON 218HS</option>
                                        <option value="">NASON 2K</option>
                                        <option value="">ENAMEL</option>
                                    </select>
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Paint
                                        Brand</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <input type="text"id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop" placeholder="Enter Name & Code"
                                        class="form-element-field -hasvalue">
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Name
                                        & Code</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <input type="text"id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop" placeholder="Enter Cost"
                                        class="form-element-field -hasvalue">
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Cost</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <input type="text"id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop" placeholder="Enter Quantity"
                                        class="form-element-field -hasvalue">
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Quantity</label>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-element form-input form-has-error">
                                    <input type="text"id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop" placeholder="Enter Comment"
                                        class="form-element-field -hasvalue">
                                    <div class="form-element-bar"></div>
                                    <label class="form-element-label"
                                        for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Comment</label>

                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div> --}}
            {{-- form 5 end --}}
            {{-- form 5 js --}}


        </div>
    </div>

    <div class="card"></div>
    <script>
        $('.task_input').change(function() {
            if ($(this).val() == "PAINT") {
                $('.primer_input').prop('disabled', true)
            } else if ($(this).val() == "PRIME") {
                $('.primer_input').prop('disabled', true)
                $('.paint_board_input').prop('disabled', true)
                $('.name_and_code_input').prop('disabled', true)
            }
        })
        $('.stock_paint').change(function() {
            var selectedValue = $(this).val();
            if (selectedValue != "") {
                $('.primer_input').prop('disabled', true);
                $('.paint_board_input').prop('disabled', true);
                $('.name_and_code_input').prop('disabled', true);
            } else {
                $('.primer_input').prop('disabled', false);
                $('.paint_board_input').prop('disabled', false);
                $('.name_and_code_input').prop('disabled', false);
            }
        })
    </script>
    <script>
        $('.calculate_time').change(function() {

            var startHour = $('.start_hour').val();
            var startMinutes = $('.start_minutes').val();
            var stopHour = $('.stop_hour').val();
            var stopMinutes = $('.stop_minutes').val();

            if (stopHour < startHour || (stopHour === startHour && stopMinutes < startMinutes)) {
                stopHour += 12; // Add 12 hours to stopHour
            }

            var start = new Date(0, 0, 0, startHour, startMinutes);
            var stop = new Date(0, 0, 0, stopHour, stopMinutes);
            var diff = stop - start;

            var hours = Math.floor(diff / 1000 / 60 / 60);
            diff -= hours * 1000 * 60 * 60;
            var minutes = Math.floor(diff / 1000 / 60);

            if (hours > 24) {
                console.log(hours / 24);
            }
            var time = hours + ':' + (minutes < 10 ? '0' : '') + minutes;


            $('.total_time').val(time)


            // console.log('Time Difference:', hours,minutes);
        })
    </script>
    {{-- form 2 js --}}
    <script>
        $(function() {
            $('body').on('keyup keydown cut paste change focus drop', ".form-control", function() {
                if ($(this).val().length != 0) {
                    $(this).closest('.form-group').addClass('show-label');
                } else {
                    $(this).closest('.form-group').removeClass('show-label');
                }
            });

            $('.form-control').each(function() {
                if ($(this).val().length != 0) {
                    $(this).closest('.form-group').addClass('show-label');
                }
            });

            $('[data-toggle="tooltip"]').tooltip({
                container: '.container',
                viewport: {
                    selector: '.container',
                    padding: 15
                }
            });

        });
    </script>
    {{-- form 2 js end --}}
    {{-- form 5 js --}}
    {{-- <script>
        document.addEventListener("change", function(event) {
            let element = event.target;
            if (element && element.matches(".form-element-field")) {
                element.classList[element.value ? "add" : "remove"]("-hasvalue");
            }
        });
    </script> --}}
    {{-- form 5 js end --}}
@endsection
