"use strict";
/**
 * @license
 * Copyright 2016 Palantir Technologies, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
Object.defineProperty(exports, "__esModule", { value: true });
var tslib_1 = require("tslib");
var tsutils_1 = require("tsutils");
var ts = require("typescript");
var Lint = require("../index");
var Rule = /** @class */ (function (_super) {
    tslib_1.__extends(Rule, _super);
    function Rule() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    Rule.prototype.apply = function (sourceFile) {
        return this.applyWithFunction(sourceFile, walk);
    };
    /* tslint:disable:object-literal-sort-keys */
    Rule.metadata = {
        ruleName: "no-angle-bracket-type-assertion",
        description: "Requires the use of `as Type` for type assertions instead of `<Type>`.",
        hasFix: true,
        rationale: (_a = ["\n            Both formats of type assertions have the same effect, but only `as` type assertions\n            work in `.tsx` files. This rule ensures that you have a consistent type assertion style\n            across your codebase."], _a.raw = ["\n            Both formats of type assertions have the same effect, but only \\`as\\` type assertions\n            work in \\`.tsx\\` files. This rule ensures that you have a consistent type assertion style\n            across your codebase."], Lint.Utils.dedent(_a)),
        optionsDescription: "Not configurable.",
        options: null,
        optionExamples: [true],
        type: "style",
        typescriptOnly: true,
    };
    /* tslint:enable:object-literal-sort-keys */
    Rule.FAILURE_STRING = "Type assertion using the '<>' syntax is forbidden. Use the 'as' syntax instead.";
    return Rule;
}(Lint.Rules.AbstractRule));
exports.Rule = Rule;
function walk(ctx) {
    return ts.forEachChild(ctx.sourceFile, function cb(node) {
        if (tsutils_1.isTypeAssertion(node)) {
            var start = node.getStart(ctx.sourceFile);
            ctx.addFailure(start, node.end, Rule.FAILURE_STRING, [
                Lint.Replacement.appendText(node.end, " as " + node.type.getText(ctx.sourceFile)),
                Lint.Replacement.deleteFromTo(start, node.expression.getStart(ctx.sourceFile)),
            ]);
        }
        return ts.forEachChild(node, cb);
    });
}
var _a;
