Small micro app that replicates and integrates designs carried out by our design team.

Design implements an 8px grid.

Framework overwrites bootstrap5 native spacer variable (adding several more) /colors /row and containers to implement a 6 column structure seperated by an 8px gutter.

$spacers: (
  0: 0,
  // 8px
  1: $spacer / 2,
  // 16px
  2: $spacer,
  // 24px
  3: $spacer * 1.5,
  // 32px 
  4: $spacer * 2,
  // 40px 
  5: $spacer * 2.5,
  // 48px
  6: $spacer * 3,
  // 56px
  7: $spacer * 3.5,
  // 64px
  8: $spacer * 4,
  // 76px
  9: $spacer * 4.5,
  // 80px
  10: $spacer * 5,
  // 132px
  11: $spacer * 8.25,
) !default;

Framework accounts for all media breakpoints available via bootstrap itself.

Framework utilises Sass ans Sass functions to calculate column widths based on the bootstrap breakpoints



