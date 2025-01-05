import { format as dateFNSFormat } from "date-fns";

function format(date: string): string {
  const splittedDate = date.split("-");
  return dateFNSFormat(
    new Date(
      Number(splittedDate[0]),
      Number(splittedDate[1]) - 1,
      Number(splittedDate[2])
    ),
    "LLLL d, yyyy"
  );
}

const dates = {
  format,
};

export default dates;
