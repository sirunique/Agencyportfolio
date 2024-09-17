<style>
    .inquire--1 {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .element-align {
        display: flex;
        flex-direction: column;
        justify-content: left;
        gap: 1.5rem;
        padding: 25px;
    }

    .grid-img {
        flex: 1;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .inquire-img {
        display: none;
    }

    .inquire--2 {
        grid-template-columns: 1fr 1fr;
        grid-template-columns: repeat(3, 1fr);
        padding: 7vw 15vw;
        gap: 2rem;
    }


    /* forms */
    .mb-3 {
        margin-bottom: 3rem;
    }

    .form-label {
        display: inline-block;
        margin-bottom: .5rem;
        font-weight: 600;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-control.textarea {
        height: auto;
        min-height: calc(1.5em + .75rem + 2px);
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .25);
    }

    /* forms */

    .submit {
        justify-content: right;
        border: none;
        background: none;
        text-transform: uppercase;
        cursor: pointer;
    }

    /* Desktop view */
    @media only screen and (min-width: 780px) {
        .inquire--1 {
            grid-template-columns: 1fr 1fr;
            gap: 0 10vw;
        }

        .forms {
            padding: 8vw 3vw;
        }

        .inquire-img {
            display: block;
        }

    }

    /* Desktop view */
</style>