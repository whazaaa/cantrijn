function sift3B(s1, s2, maxOffset, maxDistance) {
    if (s1 == null||!s1.length) {
        if (s2 == null) {
            return 0;
        }
        return s2.length;
    }

    if (s2 == null||!s2.length) {
        return s1.length;
    }

    var c1 = 0;
    var c2 = 0;
    var lcs = 0;
    var temporaryDistance;

    while ((c1 < s1.length) && (c2 < s2.length)) {
        if (s1.charAt(c1) == s2.charAt(c2)) {
            lcs++;
        } else {
            if (c1<c2) {
                c2=c1;
            } else {
                c1=c2;
            }
            for (var i = 0; i < maxOffset; i++) {
                if ((c1 + i < s1.length) && (s1.charAt(c1 + i) == s2.charAt(c2))) {
                    c1+= i;
                    break;
                }
                if ((c2 + i < s2.length) && (s1.charAt(c1) == s2.charAt(c2 + i))) {
                    c2+= i;
                    break;
                }
            }
        }
        c1++;
        c2++;
        if (maxDistance)
        {
            temporaryDistance=(c1+c2)/1.5-lcs;
            if (temporaryDistance>=maxDistance) return Math.round(temporaryDistance);
        }
    }
    return Math.round((s1.length + s2.length) / 1.5 - lcs);
}