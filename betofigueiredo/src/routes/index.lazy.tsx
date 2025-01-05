import { createLazyFileRoute } from "@tanstack/react-router";
import BlogList from "../components/BlogList";

export const Route = createLazyFileRoute("/")({
  component: Index,
});

function Index() {
  return (
    <>
      <div>
        <h1 className="md:text-8xl md:leading-[1.1] text-3xl mt-36 mb-7 font-bold text-[#212830] font-display text-center">
          Beto Figueiredo
        </h1>
        <p className="text-center text-sm uppercase font-sans font-medium tracking-widest text-[#48515A]">
          Software Developer / <strong>JavaScript</strong> &{" "}
          <strong>Python</strong> Specialist / <strong>Go</strong> Enthusiast
        </p>
      </div>
      <div className="mt-36">
        <h4 className="mb-10 text-sm uppercase font-sans font-medium tracking-widest text-[#48515A]">
          Blog
        </h4>
        <BlogList limit={5} />
      </div>
    </>
  );
}
