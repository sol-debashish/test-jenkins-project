for (i = 0; i < 10; i++) {
    if (i == 5) {
    continue;  /* Noncompliant */
}
    alert("i = " + i);
}
