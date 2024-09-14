<style>
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

    .space-between {
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


    /* Desktop view */
    @media only screen and (min-width: 780px) {
        .grid-img {
            height: 90%;
            width: 25vw;
        }
    }

    /* Desktop view */
</style>