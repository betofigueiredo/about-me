import { createLazyFileRoute } from "@tanstack/react-router";
import P from "../components/P";

export const Route = createLazyFileRoute("/about")({
  component: About,
});

function About() {
  return (
    <>
      <p className="mt-24 mb-10 text-4xl font-bold text-[#212830] font-display">
        My name is Herberto Figueiredo.
      </p>
      <P>
        I've been working with software development for over a decade, primarily
        with Javascript and Python. UX/UI is also a passion. Here I write about
        things I find important, in work and in life. I hope you find value in
        that.
      </P>
      <P>I currently live in Florianópolis, Brazil.</P>
      <div className="w-44 h-[1px] mt-16 bg-[#C5C5C5]" />
      <h4 className="mt-16 mb-5 text-sm uppercase font-sans font-medium tracking-widest text-[#48515A]">
        Personal
      </h4>

      <P>
        I'm a simple man with just two hobbies: <strong>sports</strong> and{" "}
        <strong>literature</strong>. I practice rock climbing, brazilian
        Jiu-Jitsu and surfing.
      </P>

      <P>
        You can find me on{" "}
        <a
          href="https://www.instagram.com/_betofigueiredo"
          target="_blank"
          rel="noopener"
          className="hover:text-black text-[#48515A]"
        >
          Instagram
        </a>{" "}
        and{" "}
        <a
          href="https://www.goodreads.com/betofigueiredo"
          target="_blank"
          rel="noopener"
          className="hover:text-black text-[#48515A]"
        >
          Goodreads
        </a>
        . Also have some old videos here:{" "}
        <a
          href="https://vimeo.com/beto"
          target="_blank"
          rel="noopener"
          className="hover:text-black text-[#48515A]"
        >
          https://vimeo.com/beto
        </a>
      </P>
    </>
  );
}
