import P from "../components/P";
import Em from "../components/Em";
import H2 from "../components/H2";

const be_careful_about_your_dependencies = {
  draft: false,
  slug: "be-careful-about-your-dependencies",
  title: "Be careful about your dependencies",
  subtitle:
    "The tragedy of an old Node project and the trap of dependencies in JavaScript projects.",
  tags: ["work"],
  publishedAt: "2025-01-18",
  content: (
    <>
      <Em>
        "The strength of a building lies in its foundation; without a solid
        base, even the grandest structure is destined to crumble."
      </Em>
      <P>
        At the company where I currently work, we have a project developed many
        years ago that almost no one dares to update. It uses outdated
        technologies like Backbone and Gulp. It's the kind of project everyone
        avoids, always finding an excuse not to put it on the priority list. But
        what's the real problem? Just outdated technologies? Poorly written
        code?
      </P>

      <H2>The tragedy of an old Node project</H2>
      <P>
        When I first saw the code, I was surprised: it's well-organized code.
        It's not perfect — no codebase is — but it's possible to navigate it
        without major difficulties, even without knowing all the libraries used.
      </P>
      <P>
        The real problem lies in the structure of the development environment.
        The project is divided into several different repositories, each with
        its own technologies: some use npm, others Gulp, others Grunt. Certain
        repositories require Node version 10 to install dependencies, while
        others need version 12 or 14. One of the repositories doesn't even
        install dependencies anymore! There's a ZIP file with the old
        node_modules folder to download from Google Drive. During installation,
        you find out you need a specific version of Ruby installed. It's
        chaotic, to say the least.
      </P>
      <P>
        You might wonder how it got to this point. Management mistakes
        undoubtedly contributed. Introducing so many different technologies that
        perform similar functions is a clear example of poor management. And
        this is, obviously, an extreme case. However, dependency-related
        problems are incredibly common in JavaScript projects.
      </P>

      <H2>The trap of dependencies in JavaScript projects</H2>
      <P>
        Keeping dependencies up to date is a constant challenge in large
        projects. Often, this task is postponed. It's hard to find time for it
        and even harder to justify the effort to other areas of the company, as
        it's rarely a deliverable that brings visible benefits to the client.
      </P>
      <P>
        However, sooner or later, this problem becomes unavoidable. In large
        JavaScript projects, everything seems to work fine until it doesn't.
        Then you find out you need to update a dependency, and that breaks
        another dependency. The infamous “callback hell” is nothing compared to
        “dependency update hell.” Even minor versions can break everything just
        as often as major versions — and the worst part is: you have no idea
        what broke.
      </P>
      <P>
        The longer you take to confront this problem, the worse it gets and the
        greater the cost of fixing it.
      </P>

      <H2>Don't neglect the foundation of your software</H2>
      <P>
        Many developers worry about code quality—and they should. However,
        refactoring code is a relatively simple task. Even changing a project's
        architecture is often more straightforward than managing dependency
        updates in a disorganized environment. But updating old dependencies?
        That's always a challenge.
      </P>
      <P>
        Don't neglect them. Take care of your dependencies from the start. Keep
        them organized, updated, and well-documented. They form the foundation
        of your software, and like any foundation, they must be strong enough to
        support the weight of what you build on top of it.
      </P>
    </>
  ),
};

export default be_careful_about_your_dependencies;
