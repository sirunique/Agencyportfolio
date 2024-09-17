<style>
    .section {
        display: grid;
        grid-template-columns: 1fr;
        align-items: center;
        justify-content: center;
        padding: 0 1rem;
    }

    .work--1 {
        padding: 7rem 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 4rem;
    }

    .work-text {
        width: 80%;
    }


    .row:not(:last-child) {
        border-bottom: 2px solid grey;
    }

    .images-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3vw;
    }

    .img {
        padding-bottom: 40px;
    }

    .grid-img {
        padding-bottom: 1rem;
        flex: 1;
        height: 100%;
        width: 100%;
        object-fit: cover;
        display: block;
    }

    .space-between,
    .slide {
        display: flex;
        justify-content: space-between;
        text-align: left;

    }

    .space-between a {
        display: none;
    }

    .element-align {
        display: flex;
        flex-direction: column;
        justify-content: left;
        gap: 1.5rem;
        padding: 25px;
    }

    .btn {
        align-items: center;
        text-transform: uppercase;
        background-color: transparent;
        border: 2px solid gray;
        padding: 2vw 4vw;
        transition: color 0.3s ease, transform 0.3s ease;
        cursor: pointer;
    }

    .btn:hover {
        color: gray;
        transform: scale(1.05);
    }

    .projectBtn-section {
        padding: 10px 20px;
    }

    .projectBtn-section .btn {
        letter-spacing: 5px;
    }

    .last-slide {
        display: none;
    }

    /* Work--2 */
    .work--2 {
        gap: 4rem;
        padding-bottom: 6rem;
    }

    .work--2 h1 {
        font-size: 5vw;
    }

    .work--2 .btn {
        margin: 50px 20vw 0 20vw;
        text-transform: capitalize;
    }

    /* Work--2 */



    /* Desktop view */
    @media only screen and (min-width: 780px) {
        .section:not(:first-of-type) {
            grid-template-columns: 1fr 1fr;
            padding: 0;
        }

        .grid-img {
            height: 90%;
            width: 25vw;
        }

        .img {
            padding-bottom: 0;
        }

        .space-between a {
            display: block;
            font-size: 10px;
        }

        .work--2 {
            gap: 0;
            padding-bottom: 0;
        }

        .work--2 .btn {
            margin: 2rem 12rem;
        }

        .slide {
            display: none;
        }


        .last-slide {
            display: flex;
            justify-content: space-between;
        }

    }

    /* Desktop view */
</style>