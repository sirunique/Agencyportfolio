<style>
    .detail {
        padding: 4rem 0;
    }

    .text {
        display: grid;
        grid-template-columns: 1fr;
        padding: 0 2rem;
    }

    .section--show {
        opacity: 1;
        transform: translateY(0);
    }

    h1 {
        letter-spacing: 5px;
    }

    .work_details {
        display: flex;
        flex-direction: column;
        padding: 4rem 2rem;
        gap: 3vw;
    }

    p:first-of-type {
        color: gray;
    }

    .dual-img {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3vw;
    }

    .back {
        align-self: flex-start;
        border: none;
        background: none;
        text-transform: uppercase;
        cursor: pointer;
    }

    .back:hover {
        color: gray;
    }


    /* Desktop view */
    @media only screen and (min-width: 780px) {
        .detail {
            padding: 7vw 0;
        }

        .work_details {
            padding: 0 25vw;
        }

        .text {
            grid-template-columns: 1fr 1fr;
            padding: 0 15vw;
        }

    }

    /* Desktop view */
</style>