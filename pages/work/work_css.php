<style>
    .section {
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
        gap: 5vw;
    }

    .img {
        padding-bottom: 40px;
        cursor: pointer;
    }

    .grid-img {
        padding-bottom: 5px;
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

    .projectBtn-section {
        padding: 10px 20px;
    }

    .projectBtn-section .btn {
        letter-spacing: 5px;
    }

    /* Work--2 */
    .work--2 {
        display: flex;
        flex-direction: column;
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
        .grid-img {
            height: 90%;
            width: 25vw;
        }
    }

    /* Desktop view */
</style>