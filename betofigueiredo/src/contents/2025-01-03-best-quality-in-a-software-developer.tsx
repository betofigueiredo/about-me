import P from "../components/P";
import Em from "../components/Em";

const best_quality_in_a_software_developer = {
  draft: false,
  slug: "best-quality-in-a-software-developer",
  title: "Best quality in a software developer",
  subtitle:
    "If you were hiring a developer today, what would be the primary quality you'd look for in that person?",
  tags: ["work"],
  publishedAt: "2025-01-03",
  content: (
    <>
      <Em>
        "Deciding what not to do is as important as deciding what to do." —
        Steve Jobs.
      </Em>
      <P>
        If you were hiring a developer today, what would be the primary quality
        you'd look for in that person? What characteristic do you consider
        essential?
      </P>
      <P>
        Many people emphasize adaptability and the ability to reinvent oneself
        constantly. While that's an important trait, in my view, the most
        significant quality in a developer is{" "}
        <strong>the ability to analyze cost versus benefit</strong>. In short,
        the ability to make good decisions.
      </P>
      <P>
        Consider the following scenario: you come across a completely
        disorganized file, with multiple issues, and full of low-quality code.
        Refactoring that file comes at a cost, but many people calculate this
        cost incorrectly, focusing only on the time it would take them
        personally to complete the task. For instance, if refactoring the code
        would take four hours, is it reasonable to assume the total cost is just
        four hours?
      </P>
      <P>
        No. After the refactoring, other developers will need to review your
        changes. It's likely you'll need to make additional adjustments based on
        their feedback. Moreover, the QA team will have to test all the flows
        affected by the modifications, and there's always the risk of
        introducing a new bug that could impact the end user.
      </P>
      <P>
        How is your team doing right now? Do they have the time to handle this
        extra work? Is this the right moment to undertake such a refactor? A
        good developer must be able to assess these factors, considering not
        just their work but the broader context of the team and the company.
      </P>
      <P>
        Another example is choosing technologies for a new project. Many
        developers pick something they want to work with or whatever is trending
        at the moment. They focus on their preferences rather than the company's
        context. When selecting a technology, various factors need to be taken
        into account: Is it well-established? Is it easy to hire developers to
        work with this technology? Is it truly the best solution for the problem
        your team is currently facing?
      </P>
      <P>
        Once again, analyzing the broader context is crucial, yet many
        developers overlook this. I always perform an exercise when I need to
        make a more comprehensive assessment: If this were my company, what
        would I do?
      </P>
      <P>
        We make decisions like these every day. It's critically important to
        evaluate the broader context of each situation. Only then can we make
        better decisions.
      </P>
    </>
  ),
};

export default best_quality_in_a_software_developer;
